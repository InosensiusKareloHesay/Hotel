<?php
class c_reservasi extends CI_Controller{
    public function index(){
        $data['room'] = $this->m_reservasi->getRoom();
        $this->load->view("header");
		$this->load->view("reservasi",$data);
		$this->load->view("footer");
    }

    public function do_reservasi(){
        $id_room=$this->input->post('id_room');
        $nama=$this->input->post('nama');
        $identitas=$this->input->post('identitas');
        $email=$this->input->post('email');
        $telp=$this->input->post('telp');
        $arrival=$this->input->post('arrival');
        $departure=$this->input->post('departure');
        $adult=$this->input->post('adult');
        $child=$this->input->post('child');
        $code=$this->input->post('uniquecode');
        $this->session->set_userdata("email", $email);
        
        $result['data2']=$this->m_reservasi->getHarga();
        $datetime1 = strtotime($arrival);
        $datetime2 = strtotime($departure);
        $secs = $datetime2 - $datetime1;
        $days = $secs / 86400;

        $totalharga = 0;
        foreach ($result['data2'] as $key) {
            $totalharga = ($key['harga']*$days)+$key['id_room']+$key['id_reservasi'];
        } 
        print_r($totalharga);  
        $data=array(
                'id_room'=>$id_room,
                'nama'=>$nama,
                'identitas'=>$identitas,
                'email'=>$email,
                'telp'=>$telp,	
                'arrival'=>$arrival,
                'departure'=>$departure,
                'adult'=>$adult,
                'child'=>$child,
                'uniquecode'=>$code,
                'total_harga'=>$totalharga
         );
         
         $this->m_reservasi->reservasi($data);
         echo "<script>
                window.location.href ='".base_url('/c_total')."';
                alert('Reservasi success!');
              </script>";
    }
}