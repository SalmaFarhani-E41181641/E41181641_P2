<?php

// syntax untuk mencegah kses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	// function untuk menjalankan fungsi di controller
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
	function user(){
		// mengembalikan data yang ditangkap pada controller
		// pada syntax ambil_data berfungsi untuk memanggil fungsi tersebut dari m_data
		// dan syntax result() mengubah data menjadi array
		$data['user'] = $this->m_data->ambil_data()->result();
		//memprsing data ke dalam v_user
		$this->load->view('v_user.php',$data);
	}
 
}