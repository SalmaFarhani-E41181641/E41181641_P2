<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Selamat_datang extends CI_Controller {
	
	//function untuk memanggil helper html melalui controller
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}
 
	public function index(){
		$this->load->view('view_belajar');
	}
}