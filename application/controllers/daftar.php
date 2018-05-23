<?php
class daftar extends CI_Controller{
	public function index(){
		$this->load->model('daftarModel');
		$model = $this->daftarModel;

		if(isset($_POST['btnSubmit'])){
			$model->Nim = $_POST['Nim'];
			$model->Nama = $_POST['Nama'];
			$model->Prodi = $_POST['Prodi'];
			$model->insert();
		}else{
			$this->load->view('daftarView', ['model'=>$model]);
		}
		
		
	}
}
?>