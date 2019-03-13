<?php
if ( ! defined('BASEPATH')) exit('Direct access allowed');

class LanguageSwitcher extends JDC_Controller
{
	private $language;

	public function __construct() {
		parent::__construct();
	}

	// se le pasa por parametro el lenguaje
	public function switchLang($language = "") {
		$this->language = ($this->language != "") ? $this->language : "english";
		$this->session->set_userdata('site_lang', $this->language);
		redirect($_SERVER['HTTP_REFERER']);
	}
}




?>