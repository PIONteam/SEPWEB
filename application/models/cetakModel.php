<?php

class cetakModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function belumCetak(){
		$sql = sprintf("SELECT * FROM cetak JOIN layanan JOIN pengguna JOIN tinta JOIN status JOIN kertas JOIN outlet WHERE cetak.ID_LAYANAN = layanan.ID_LAYANAN AND cetak.ID_PENGGUNA = pengguna.ID_PENGGUNA AND cetak.ID_TINTA = tinta.ID_TINTA AND cetak.ID_STATUS = status.ID_STATUS AND cetak.ID_KERTAS = kertas.ID_KERTAS AND cetak.ID_OUTLET = outlet.ID_OUTLET AND cetak.ID_STATUS = 1");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
	}
	public function sudahCetak(){
		$sql = sprintf("SELECT * FROM cetak JOIN layanan JOIN pengguna JOIN tinta JOIN status JOIN kertas JOIN outlet WHERE cetak.ID_LAYANAN = layanan.ID_LAYANAN AND cetak.ID_PENGGUNA = pengguna.ID_PENGGUNA AND cetak.ID_TINTA = tinta.ID_TINTA AND cetak.ID_STATUS = status.ID_STATUS AND cetak.ID_KERTAS = kertas.ID_KERTAS AND cetak.ID_OUTLET = outlet.ID_OUTLET AND cetak.ID_STATUS = 2");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->result_array();
	}
	public function jumlahBelumcetak(){
		$sql = sprintf("SELECT * FROM cetak WHERE ID_STATUS = 1");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->num_rows();
	}
	public function jumlahSudahcetak(){
		$sql = sprintf("SELECT * FROM cetak WHERE ID_STATUS = 2");
		$data=$this->db->query($sql);
//		$data=$this->db->get('cetak');
    	return $data->num_rows();
	}
	public function getFile($id){
		$query = $this->db->get_where('cetak', array('ID_CETAK' => $id));
		foreach ($query->result() as $data) {
			$file = "file/".$data->BERKAS;
			$nama = $data->BERKAS;
			header('Content-type: application/pdf');
			header('Content-Disposition: inline; filename="'.$nama.'"');
			header('Content-Length: ' . filesize($file));
			ob_clean();
			flush();
			@readfile($file);
		}
		
	}
	public function selesai($id){
		$data = array(
        'ID_STATUS' => 2,
    	);
		$this->db->where('ID_CETAK', $id);
		$this->db->update('cetak', $data);
		redirect('belumCetak');
	}
}
?>