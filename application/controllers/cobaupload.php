<?php
class home extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	//$this->load->model('loginModel');
        	//$this->model = $this->loginModel;
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
		if ($this->session->has_userdata('namaPengguna')) {
            $this->load->model('cetakModel');
            $this->jumlah1 = $this->cetakModel->jumlahBelumcetak();
            $this->jumlah2 = $this->cetakModel->jumlahSudahcetak();
        	$this->load->view('homeView', $this->jumlah1, $this->jumlah2);
    		}
    	else{
        	redirect('login');
    		}
		}

	public function belumCetak(){
			

	}
}
?>