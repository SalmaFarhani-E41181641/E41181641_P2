<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	
	function index(){
		// function untuk memnggil library yang sudah dibuat
		$this->load->library('Mark');
		$this->malasngoding->nama_saya();
                echo "<br/>";
                $this->malasngoding->nama_kamu("Andi");
	}
 
}