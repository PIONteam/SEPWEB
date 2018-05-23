<?php
class daftarModel extends CI_Model{
	public $namaPengguna;
	public $kataSandi;
	public $notif = "";

	// public $labels = [];

	public function __construct(){
		parent::__construct();
		// $this->labels = $this->_attributeLabels();
		$this->load->database();
	}

	public function cek_log(){
		$sql = sprintf("SELECT COUNT(*) AS NAMA_PENGGUNA FROM pengguna WHERE NAMA_PENGGUNA='%s' AND KATA_SANDI='%s'",
			$this->namaPengguna,
			$this->kataSandi);
		$query = $this->db->query($sql);
		$row = $query->row_array();
		return $row['NAMA_PENGGUNA'] == 1;
		}
	}

	/*private function _attributeLabels(){
		return [
			'username'=>'User :',
			'password'=>'Password :'];
	}*/
?>