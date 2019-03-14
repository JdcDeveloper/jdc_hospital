<?php
class LanguageLoader
{
	function initialize() {
		$ci =& get_instance();
		$ci->load->helper('language');
		$siteLang = $ci->session->userdata('site_lang');

		// opciones del lenguaje
		if ($siteLang == 'english') {
			$ci->lang->load('english',$siteLang);
		}elseif ($siteLang == 'spanish') {
			$ci->lang->load('spanish',$siteLang);			
		}else {
			$ci->lang->load('english','english');
		}

	}
}