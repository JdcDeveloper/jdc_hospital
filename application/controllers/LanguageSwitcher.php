<?php
if ( ! defined('BASEPATH')) exit('Direct access allowed');
class LanguageSwitcher extends JDC_Controller
{
	public function __construct() {
		parent::__construct();
		
	}

	// se le pasa por parametro el lenguaje
	function switchLang($language = "") {
		$language = ($language != "") ? $language : "english";
		$this->session->set_userdata('site_lang', $language);
		redirect($_SERVER['HTTP_REFERER']);
	}
}




?>