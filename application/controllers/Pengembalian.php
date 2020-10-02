<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pengembalian_m');
		$this->load->helper("url");
	}


	// MENAMPILKAN SELURUH DATA 
	public function index()
	{
		$data['row'] = $this ->pengembalian_m->get();
		
		$this->template->load('template','pengembalian/v_pengembalian',$data, false);
	}

	public function cari()
	{
		$this->load->view('v_pengembalian');
	}
	public function hasil()
	{
		$data['cari']= $this->pengembalian_m();
		$this->load->view('result',$data);
	}

	public function kembali($id)
	{
		$i = $this->input;
		$data = array(
				'id_peminjaman'	  => $id,
				'tanggal_kembali' 		 => date("Y-m-d"),
			);

		$this->pengembalian_m->kembalikan($data);
		redirect(base_url('Pengembalian'), 'refresh');	
		// var_dump($data);

	}

}