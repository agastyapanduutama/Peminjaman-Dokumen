<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('peminjaman');
		if($id != null){
			$this->db->where('no_rm', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function __construct()
	{
		$this->load->database();
	}
	public function cari()
	{
		$cari = $this-> input -> GET('cari', TRUE);
		$data = $this->db->query("select* from pengembalian where name like %cari%");  
		return $data->result();
	}

	public function data_peminjam()
	{
		$this->db->from('peminjaman');
		$this->db->order_by('id_peminjaman', 'desc');
			if($this->session->level != '1'){
				$this->db->where('id_user', $this->session->userid);
			}
		return $query = $this->db->get()->result();	
	}

	public function detail_pengembalian($id_pengembalian)	{
		$this->db->select('*');
		$this->db->from('pengembalian');
		$this->db->where('id_pengembalian', $id_pengembalian);
		$this->db->order_by('id_pengembalian', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function kembalikan($data) {
		$this->db->where('id_peminjaman', $data['id_peminjaman']);
		$this->db->update('peminjaman', $data);
	}




}

/* End of file Peminjaman_model.php */
/* Location: ./application/models/Peminjaman_model.php */