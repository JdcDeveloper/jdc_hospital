<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Users extends JDC_Controller {	


	public function __construct()
	{		
		parent::__construct();		
		
	}


	public function index()
	{

		$data[ 'title' ] = 'view';		

		// $data = $this->Users_Model->getUsers();

		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('layouts/header',$data);	
		$this->load->view('admin/users/users');
		$this->load->view('layouts/footer');
		

	}	


	public function add()
	{
		$data[ 'title' ] = 'add';	


		$this->load->view('admin/inc/navbar');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('layouts/header',$data);	
		$this->load->view('admin/users/add');
		$this->load->view('layouts/footer');


	}

	

	public function register(){


		
		$tUsers=array(			
			'img' => 'user.png',
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),			
			'email' => $this->input->post('email'),
			'password' =>  $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
			'id_country' => $this->input->post('country'),
			'id_state' => $this->input->post('state'),
			'id_role' => $this->input->post('role'),	  	
			'created_date' => $date = date('Y-m-d'),
			'update_date' => null,
			'last_access' => null
		);


		$this->db->insert('dev.users', $tUsers);

		redirect(base_url("users"));






	}

	public function edit($id)
	{


		$data = $this->Users_Model->getUsersById($id);

		$this->load->view('admin/inc/navbar',$this->userInfo);
		$this->load->view('admin/inc/sidebar',$this->userInfo);
		$this->load_layout('admin/users/edit',array('data' => $data));


		// si mando por post el formulario le paso el parametro $id
		if (isset($_POST['submit'])) {

			$this->update();
		}

		// $this->update($id);


		
	}

	// esta mala la normalizacion,arreglarla
	public function update( )
	{


		
		$data=array(
			'id_user' => $this->input->post('id_user'), 			
			'first_name' => $this->input->post('first_name'), 
			'last_name' => $this->input->post('last_name'),
			'country' => $this->input->post('country'),
			'state' => $this->input->post('state'),
			'role' => $this->input->post('role'),
			'update_date' => $date = date('Y-m-d')		
		);

		$this->Users_Model->update($data);


		redirect(base_url("users"));


		
	}

	public function delete($id)
	{
		$this->Users_Model->deleteUsers($id);
		
		redirect(base_url("users"));
	}	


	public function usersPdf()
	{ 

		$users = $this->Users_Model->getUsers();
		// Toma una cadena codificada en JSON y la convierte en una variable de PHP
		$data=json_decode($users);


		$totalUsers = $this->Api_Model->countUsers();

		$this->pdf = new fpdf();

		$this->pdf->AddPage();

		$this->pdf->AliasNbPages(); 

		$this->pdf->SetTitle("Report Users");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(200,200,200); 

		$this->pdf->SetFont('Arial', 'B', 9);  

		$this->pdf->Cell(40,5,'First name','TBL',0,'L','1');
		$this->pdf->Cell(40,5,'Last name','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Country','TB',0,'L','1');
		$this->pdf->Cell(40,5,'State','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Role','TB',0,'L','1');
		$this->pdf->Cell(40,5,'Created date','TB',0,'L','1');          
		$this->pdf->Ln(7);

		foreach ($data as $datos) {

			$this->pdf->Cell(40,5,$datos->first_name,'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos->last_name,'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos->country,'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos->state,'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos->role,'B',0,'L',0);
			$this->pdf->Cell(40,5,$datos->created_date,'B',0,'L',0);        


			$this->pdf->Ln(5);
		}

		$this->pdf->Cell(40,5,'Total By Date:','TB',0,'L','1');
		$this->pdf->Cell(40,5, date("d-m-y"),'B',0,'L',0);
		$this->pdf->Ln(5);
		$this->pdf->Cell(40,5,'Total Users:','TB',0,'L','1');
		$this->pdf->Cell(40,5, $totalUsers['totalUsers']->totalusers,'B',0,'L',0);


		$this->pdf->Output("Report users.pdf", 'D');


	}



	public function usersExcel()
	{

		$data = $this->Users_Model->getUsersExcel();
		

       //load our new PHPExcel library
		$this->load->library('phpexcel');
        //activate worksheet number 1
		$this->phpexcel->setActiveSheetIndex(0);

        //name the worksheet
		$this->phpexcel->getActiveSheet()->setTitle('Report Users');       

		$this->phpexcel->getActiveSheet()->fromArray($data);


    $filename='Report users.xls'; //save our workbook as this file name
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache

    //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
    //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');  
    //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');   



}



}

