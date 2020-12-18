<?php
class m_reservasi extends CI_Model {
	
	public $table = 'reservasi';

	public function reservasi($data){
		$this->db->insert($this->table,$data);
	}

	public function getRoom(){
		return $this->db->get('rooms')->result_array();
	}

	public function inputBookFirst($data){
		$this->db->insert($this->table,$data);
	}

	public function getDataReservasi($email){
		return $this->db->get_where('reservasi', array('email'=>$email))->result_array();
	}

	public function getHarga(){
		$email = $this->session->userdata("email");
		$this->db->select('*');
		$this->db->from('rooms');
		$this->db->join('reservasi', 'rooms.id_room = reservasi.id_room');
		$this->db->where('reservasi.email', $email);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function selectcode($kode){
		$cek = array('uniquecode'=>$kode);
		$log = $this->db->select('*')->from('reservasi')->where($cek);
		$row = $this->db->get();
			if ($row->num_rows()==1) {
				return true;
			}else {
				return false;
			}
	}

	public function selectByCode($kode){
		return $this->db->get_where('reservasi', array('uniquecode'=>$kode))->result_array();
	}

	public function getTotalHarga(){
		return $this->db->get_where('reservasi', array('email'=>$this->session->userdata("email")))->result_array();
	}
}
?>