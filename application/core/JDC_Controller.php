<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class JDC_Controller extends CI_Controller {
  
    // propiedad que guarda la informacion del usuario
    protected $userInfo; 
    
    // propiedad para el titulo de las paginas
    protected $title;   



    public function __construct()
    {
        parent::__construct();       

        // guardo la informacion del usuario en la propieda userInfo
        // y la utlizo en las clases que heredan de esta clase
        $this->userInfo = $this->getSession();         

    }


   

    // metodo que devolvera la info del usuario
    public function getSession()
    {
        return $this->session->userdata('user');
    }

    


    // pequeño midleware para no entrar por url,
    // sin estar logeado como un usuario
    public function auth()
    {

        if ($this->session->userdata('user') === null) {

            redirect(base_url());


        }



    }



}
