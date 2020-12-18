<?php
class c_total extends CI_Controller{
    public function index(){
    	$data['total'] = $this->m_reservasi->getTotalHarga();
        $this->load->view("header");
		$this->load->view("total",$data);
		$this->load->view("footer");
    }
}