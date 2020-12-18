<?php
class c_payment extends CI_Controller{
    public function index(){
        $this->load->view("header");
		$this->load->view("payment");
		$this->load->view("footer");
    }

    public function searchunique(){
    	$kode = $this->input->post('code');
    	$query = $this->m_reservasi->selectcode($kode);
    	if($query == false){
				echo "<script>
					window.location.href='".base_url('/c_payment')."';  
		 			alert('Data Tidak Ditemukan!');
                 </script>";
			} else {
				echo "<script>  
		 			window.location.href='".base_url('/c_transaksi/selectByCode/'.$kode)."';
                 </script>";
			}
    }
}