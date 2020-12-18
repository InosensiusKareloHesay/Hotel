<?php
class c_home extends CI_Controller{
    public function index(){
    	//$data['reservasi'] = $this->m_reservasi->getDataReservasi();
        $this->load->view("header");
		$this->load->view("index");
		$this->load->view("footer");
    }
}