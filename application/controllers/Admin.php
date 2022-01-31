<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('username')) and $this->session->userdata('level') != 'Admin' ){
			redirect(base_url());
		}
    }

	public function index()
	{
		$data['grafik'] = $this->Mbarang->stat_brg()->result();
		$data['barang'] = $this->Mbarang->bar_kat()->result();
		$this->template->load('admin/layout','admin/konten',$data);
	}

	public function data_barang($offset=null){
		$data['grafik'] = array();
		// $data['brg'] = $this->Mbarang->bar_kat()->result();
		// $data = array();
		//set records per page
        $limit_page = 5;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
		$data['page'] = $page;
        $total = $this->Mbarang->get_total();

        if ($total > 0) 
        {
            // get current page records
            $data['results'] = $this->Mbarang->paginate($limit_page, $page * $limit_page)->result();
             
            $config['base_url'] = base_url('a/data-barang');
            $config['total_rows'] = $total;
            $config['per_page'] = $limit_page;
            $config['uri_segment'] = 3;

            //paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
            
            //bootstrap pagination 
            $config['full_tag_open'] = '<nav aria-label="..."><ul class="pagination pagination-md justify-content-center">';
			$config['full_tag_close'] = '</ul></nav>'; 
			$config['first_link'] = '<i class="fa fa-backward"></i>';
			$config['first_tag_open'] = '<li class="page-item"><div class="page-link">';
			$config['first_tag_close'] = '</div></li>';
			$config['last_link'] = '<i class="fa fa-fast-forward"></i>';
			$config['last_tag_open'] = '<li class="page-item"><div class="page-link">';
			$config['last_tag_close'] = '</div></li>';
			$config['next_link'] = '<i class="fa fa-step-forward"></i>';
			$config['next_tag_open'] = '<li class="page-item"><div class="page-link">';
			$config['next_tag_close'] = '</div></li>';
			$config['prev_link'] = '<i class="fa fa-step-backward"></i>';
			$config['prev_tag_open'] = '<li class="page-item"><div class="page-link">';
			$config['prev_tag_close'] = '</div></li>';
			$config['cur_tag_open'] = '<li class="page-item disabled"><div class="page-link" href="#" tabindex="-1">';
			$config['cur_tag_close'] = '</div></li>';
			$config['num_tag_open'] = '<li class="page-item"><div class="page-link">';
			$config['num_tag_close'] = '</div></li>';
             
            $this->pagination->initialize($config);
            // build paging links
            $data['links'] = $this->pagination->create_links();
        }
		// echo $page;
		// exit();
		$this->template->load('admin/layout','admin/data_barang',$data);
	}

	public function tambah_brg(){
		$data['grafik'] = array();
		$data['ktgr'] = $this->Mbarang->tampil('kategori')->result();
		$this->template->load('admin/layout','admin/tambah_barang',$data);
	}

	public function tmbh_simpan(){
		$nama = $this->input->post('namabrg');
		$harga = $this->input->post('hrg');
		$stok = $this->input->post('stok');
		$kat = $this->input->post('pilkat');
		$datainsert = array(
			'nama_barang' => $nama,
			'harga' => $harga,
			'stok' => $stok,
			'id_kategori' => $kat
		);
		$this->Mbarang->insert('barang', $datainsert);
		$this->session->set_flashdata('notif','ytambah');
		redirect('a/data-barang');
	}

	public function edit($id){
		$data['grafik'] = array();
		$datawhere = array('id_barang' => $id);
		$data['brg'] = $this->Mbarang->get_where('barang',$datawhere)->row_object();
		$data['ktgr'] = $this->Mbarang->tampil('kategori')->result();
		$this->template->load('admin/layout','admin/edit_barang',$data);
	}

	public function simpan_edit(){
		$id = $this->input->post('id');
		$nb = $this->input->post('namabrg');
		$hrg = $this->input->post('hrg');
		$stok = $this->input->post('stok');
		$kt = $this->input->post('kat');

		$dataupdate = array(
			'nama_barang' => $nb,
			'harga' => $hrg,
			'stok' => $stok,
			'id_kategori' => $kt
		);

		$where = array('id_barang' => $id);

		$this->Mbarang->update('barang',$dataupdate,$where);
		$this->session->set_flashdata('notif','yedit');
		redirect('a/data-barang');

	}

	public function hapus_brg($id){
		$where = array('id_barang' => $id);
		$this->Mbarang->hapus('barang',$where);
		if ($this->db->affected_rows() > 0 ) {
			$this->session->set_flashdata('notif','yhapus');
		}else{
			$this->session->set_flashdata('notif','xhapus');
        }
		redirect('a/data-barang');
	}

	public function akumulasi_terjual(){
        $p = $this->Mbarang->persentase()->result();
        foreach ($p as $item) {
            $stok = $item->stok;
            $terjual = $item->terjual;
            $persen = ($terjual/$stok)*100;
            $datainsert = array('id_barang' => $item->id_barang,
                                'angka_penjualan' => $persen
                            );
            $this->Mbarang->add_persen($datainsert);
        }
        redirect('a/data-barang-terlaris');
    }

	public function akumulasi_ulang(){
        $this->Mbarang->hapus_persen();
        $p = $this->Mbarang->persentase()->result();
        foreach ($p as $item) {
            $stok = $item->stok;
            $terjual = $item->terjual;
            $persen = ($terjual/$stok)*100;
            $datainsert = array('id_barang' => $item->id_barang,
                                'angka_penjualan' => $persen
                            );
            $this->Mbarang->add_persen($datainsert);
        }
        redirect('a/data-barang-terlaris');
    }
	
	public function terlaris(){
		$data['grafik'] = array();
		$data['prsn'] = $this->Mbarang->tampil('persen_penjualan')->num_rows();
		$data['hhitung'] = $this->Mbarang->tampil_persen()->result();
		$this->template->load('admin/layout','admin/data_terlaris',$data);
	}

	public function detail_tsk(){
		$data['grafik'] = array();
		$data['tsk'] = $this->Mbarang->dtl_tsk()->result();
		$this->template->load('admin/layout','admin/detail_transaksi',$data);
	}

	public function tespage(){
		$this->template->load('admin/layout','admin/test');
	}

}