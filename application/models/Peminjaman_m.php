<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_m extends CI_Model {

	public function get($id = null)
	{
		$this->db->from('peminjaman');
		$this->db->join('user', 'user.user_id	 = peminjaman.id_user', 'left');
		if($id != null){
			$this->db->where('no_rm', $id);
		}
			if($this->session->level != '1'){
				$this->db->where('id_user', $this->session->userid);
			}
		$query = $this->db->get();
		return $query;
	}

	public function detail_peminjaman($id_peminjaman)	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->where('id_peminjaman', $id_peminjaman);
		$this->db->order_by('id_peminjaman', 'DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_peminjaman($data) {
		$this->db->where('id_peminjaman', $data['id_peminjaman']);
		$this->db->update('peminjaman', $data);
	}
}

/* End of file Peminjaman_model.php */
/* Location: ./application/models/Peminjaman_model.php */