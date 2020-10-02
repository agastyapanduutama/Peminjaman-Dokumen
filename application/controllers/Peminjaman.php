<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('peminjaman_m');
	}


	// MENAMPILKAN SELURUH DATA 
	public function index()
	{
		$data['row'] = $this->peminjaman_m->get();
		$this->template->load('template', 'peminjaman/index', $data);
	}
	
	// MENAMPILKAN FORM TAMBAH DATA
	public function add()
	{
		$this->template->load('template', 'peminjaman/v_add');
	}


	// MENYIMPAN DATA PADA FORM TAMBAH DAT
	public function simpan()
	{
		$data = array(
			        'no_rm' 		 => $this->input->post('no_rm'),
			        'nama'	 		 => $this->input->post('nama'),
			        'no_hp'			=> $this ->input->post('no_hp'),
			        'unit_kerja'	=> $this ->input->post('unit_kerja'),
			        'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			        'peminjam'		=> $this ->input->post('peminjam'),
			        'id_user' 		 => $this->input->post('id_user'),
			        'peminjam_nama' 		 => $this->input->post('peminjam_nama')
			);

			$this->db->insert('peminjaman', $data);
			redirect('peminjaman','refresh');
	}

	
	// MENGUBAH DATA BERDASARKAN ID PEMINJAMAN
	public function edit($id_peminjaman)
	{
		$peminjaman = $this->peminjaman_m->detail_peminjaman($id_peminjaman);


		$valid = $this->form_validation;
		
		$valid->set_rules('no_rm','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()===FALSE) {
		
		$data = array( 'data' => $peminjaman );

		$this->template->load('template', 'peminjaman/v_edit', $data);

		}else{
		
		$i = $this->input;
		$data = array(
					'id_peminjaman'	  => $id_peminjaman,
			        'no_rm' 		 => $this->input->post('no_rm'),
			        'nama'	 		 => $this->input->post('nama'),
			        'no_hp'			=> $this ->input->post('no_hp'),
			        'unit_kerja'	=> $this ->input->post('unit_kerja'),
			        'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			        'peminjam'		=> $this ->input->post('peminjam'),
			        'username' 		 => $this->input->post('username'),			
		);


			// $this->peminjaman_m->edit_peminjaman($data);

			var_dump($data);

			// redirect('peminjaman','refresh');
		}
	}

	// MENYIMPAN DATA YANG SUDAH DI UPDATE 
	public function simpan_edit($id_peminjaman)
	{
		$i = $this->input;
			
		$data = array(
			        'id_peminjaman' 		 => $this->input->post('id_peminjaman'),
			        'no_rm' 		 => $this->input->post('no_rm'),
			        'nama'	 		 => $this->input->post('nama'),
			        'no_hp'			=> $this ->input->post('no_hp'),
			        'unit_kerja'	=> $this ->input->post('unit_kerja'),
			        'tgl_peminjaman' => $this->input->post('tgl_peminjaman'),
			        'peminjam'		=> $this ->input->post('peminjam'),
			        'username' 		 => $this->input->post('username'),
		);

			$this->peminjaman_m->edit_peminjaman($data);
			redirect('peminjaman','refresh');
	}


	// MENGHAPUS DATA BERDASARKAN ID PEMINJAMAN
	public function hapus($id_peminjaman)
	{
		$this->db->delete('peminjaman', array('id_peminjaman' => $id_peminjaman));  
		redirect('peminjaman','refresh');
	}

}
/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */