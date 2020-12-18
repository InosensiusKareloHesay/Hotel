<?php
class c_transaksi extends CI_Controller{
    public function index($kode){
    	$data['transaksi'] = $this->m_reservasi->selectByCode($kode);
        $this->load->view("header");
		$this->load->view("transaksi",$data);
		$this->load->view("footer");
    }

    public function selectByCode($kode){
    	$data['transaksi'] = $this->m_reservasi->selectByCode($kode);
        $this->load->view("header");
		$this->load->view("transaksi",$data);
		$this->load->view("footer");
    }

    public function selectByCode2($kode){
    	$data['transaksi'] = $this->m_reservasi->selectByCode($kode);
        $this->load->view("header");
		$this->load->view("transaksi",$data);
		$this->load->view("footer");
    }
}