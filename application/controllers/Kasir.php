<?php

class Kasir extends CI_Controller {

    function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('username')) and $this->session->userdata('level') != 'Kasir' ){
			redirect(base_url());
		}
    }

    public function index()
	{
		$data['brg'] = $this->Mbarang->or_ba()->result();
        $data['beli'] = $this->Mbarang->list_beli()->result();
        $data['total'] = $this->Mbarang->total_harga()->result();
        $this->template->load('kasir/layout','kasir/input',$data);
	}

    public function transaksi_masuk(){
        $id = $this->input->post('pilbar');
        $jmlh = $this->input->post('jumlah');

        $w = array('id_barang' => $id);
        $q = $this->Mbarang->where_orba($w)->row();

        $insertData = array(
            'id_barang' => $id,
            'jumlah' => $jmlh,
            'status' => 'pending',
            'total' => $jmlh*$q->harga,
            'user_id' => $this->session->userdata('user_id')
        );

        $this->Mbarang->tambah_transaksi($insertData);
        
        redirect('kasir');
    }

    public function coba(){
        $msk = $this->Mbarang->list_beli()->result();
        foreach ($msk as $item) {
            $this->Mbarang->update('barang',array('terjual' => $item->jumlah),array('id_barang' => $item->id_barang));
        }
        redirect(POS);
    }

    public function proses_trsk(){
        $msk = $this->Mbarang->list_beli()->result();
        foreach ($msk as $item) {
            $this->Mbarang->update('barang',array('terjual' => $item->jumlah),array('id_barang' => $item->id_barang));
        }
        $data = array('status' => 'done');
        $where = array('status' => 'pending');
        $this->Mbarang->update('transaksi',$data,$where);
        redirect('POS');
    }

    public function data_barang(){
        $data['tampilsemua'] = '';
		$data['brg'] = $this->Mbarang->or_ba()->result();
		$this->template->load('kasir/layout','kasir/data_barang',$data);
	}

    public function cari_brg(){
        $w = $this->input->post('cari');
        $data['brg'] = $this->Mbarang->cari_brg($w)->result();
        $data['tampilsemua'] = '<tr>
									<td colspan="5" align="center"><a href="'.base_url('kasir/data_barang').'">Tampilkan semua . . .</a></td>
								</tr>';
        $this->template->load('kasir/layout','kasir/data_barang',$data);
    }

    public function hapus_daftar_beli($id){
        $where = array('id_transaksi' => $id);
        $this->Mbarang->hapus('transaksi',$where);
        redirect('kasir');
    }

    public function cat_tsk(){
        $w = $this->session->userdata('user_id');
        $data['tsk'] = $this->Mbarang->ctt_tsk($w)->result();
        $this->template->load('kasir/layout','kasir/transaksi',$data);
    }

}