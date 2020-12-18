<?php
class c_rooms extends CI_Controller{
    public function index(){
        $this->load->view("header");
		$this->load->view("rooms");
		$this->load->view("footer");
    }
}