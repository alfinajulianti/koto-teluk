<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabulasi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_admin'));
        $this->load->library(array('frame'));
	}

	public function index()
    {
        
        $data['tabel_1_1_a'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1');

        $data['rt'] = $this->Model_admin->ambil_kolom('*','tabel_rt','id_rt IS NOT NULL');

        $this->frame->frame1('tabulasi/beranda',$data);
    }

}
