<?php
class c_about extends CI_Controller{
    public function index(){
        $this->load->view("header");
		$this->load->view("about");
		$this->load->view("footer");
    }
}