<?php
class sudahCetak extends CI_Controller{
	public function __construct(){
    	    parent::__construct();
        	$this->load->library('session');
        	$this->load->helper('url');
    	}

    public function index(){
    	$this->load->model('cetakModel');
    	$this->data['hasil']=$this->cetakModel->sudahCetak();
		$this->load->view('sudahCetakview', $this->data);
		}
}
?>