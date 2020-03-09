<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// function yang digunakan untuk memanggil atau load helper url dan download
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){		
		$this->load->view('v_download');
	}
 
	public function lakukan_download(){				
		force_download('gambar/framework1.png',NULL);
	}	
 
}