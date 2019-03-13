<?php
class LanguageLoader
{
	private $ci;
	private $siteLang;


	public function initialize() {
		$this->ci =& get_instance();
		$this->ci->load->helper('language');
		$this->siteLang = $this->$ci->session->userdata('site_lang');

		// opciones del lenguaje
		if ($this->siteLang == 'english') {
			$this->ci->lang->load('english',$this->siteLang);
		}elseif ($this->siteLang == 'spanish') {
			$this->ci->lang->load('spanish',$this->siteLang);			
		}else {
			$this->ci->lang->load('english','english');
		}

	}
}