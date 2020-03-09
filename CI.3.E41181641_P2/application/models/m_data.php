<?php 
 
class M_data extends CI_Model{
	// function untuk mengambil data pada tabel "user"
	function ambil_data(){
		// digunakan untuk mengambil data dari database 
		return $this->db->get('user');
	}
}