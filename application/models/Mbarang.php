<?php

class Mbarang extends CI_Model {

    public function stat_kategori(){
        $q = $this->db->query('select kategori.id_kategori, nama_kategori, count(barang.id_kategori) as jumlah
        from kategori left join barang on kategori.id_kategori=barang.id_kategori group by kategori.id_kategori');
        return $q;
    }

    public function stat_brg(){
        $this->db->select('sum(jumlah) as jml, tgl_tsk');
        $this->db->limit(30);
        $this->db->group_by('tgl_tsk');
        return $this->db->get('transaksi');
    }

    public function get_total() 
	{
		return $this->db->count_all('barang');
	}

    public function paginate($limit,$offset){
        $this->db->join('kategori','kategori.id_kategori=barang.id_kategori');
        $this->db->order_by('id_barang', 'DESC');
        $this->db->limit($limit, $offset);
        return $this->db->get('barang');
    }

    public function bar_kat(){
        $this->db->join('kategori','kategori.id_kategori=barang.id_kategori');
        $this->db->order_by('id_barang', 'DESC');
        $this->db->limit(10);
        return $this->db->get('barang');
    }

    public function cari_brg($w){
        $this->db->like('nama_barang',$w);
        return $this->db->get('barang');
    }

    public function or_ba(){
        return $this->db->get('barang');
    }

    public function where_orba($w){
        $this->db->where($w);
        return $this->db->get('barang');
    }

    public function tambah_transaksi($data){
        $this->db->insert('transaksi',$data);
    }

    public function list_beli(){
        $this->db->where('status', 'pending');
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        return $this->db->get('transaksi');
    }

    public function total_harga(){
        $q = $this->db->query('select count(total) as total from transaksi where status="pending"');
        return $q;
    }

    public function update($t,$d,$w){
        $this->db->where($w);
        $this->db->update($t,$d);
    }

    public function hapus($t,$w){
        $this->db->where($w);
        $this->db->delete($t);
    }

    public function persentase(){
        $this->db->where(array('terjual' != 0));
        return $this->db->get('barang');
    }
    
    public function add_persen($d){
        $this->db->insert('persen_penjualan',$d);
    }

    public function hapus_persen(){
        $this->db->empty_table('persen_penjualan');
    }

    public function insert($t, $d){
        $this->db->insert($t,$d);
    }

    public function tampil($t){
        return $this->db->get($t);
    }

    public function get_where($t,$w){
        $this->db->where($w);
        return $this->db->get($t);
    }

    public function tampil_persen(){
        $this->db->join('persen_penjualan','persen_penjualan.id_barang=barang.id_barang');
        $this->db->where('angka_penjualan >', 0);
        $this->db->order_by('angka_penjualan', 'DESC');
        return $this->db->get('barang');
    }

    public function dtl_tsk(){
        $this->db->select('*, sum(jumlah) as jml');
        $this->db->join('user','user.user_id=transaksi.user_id');
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        $this->db->where('status','done');
        $this->db->group_by('transaksi.id_barang');
        $this->db->order_by('transaksi.user_id','ASC');
        $q = $this->db->get('transaksi');
        return $q;
    }
    
    public function ctt_tsk($w){
        $this->db->join('user','user.user_id=transaksi.user_id');
        $this->db->join('barang','barang.id_barang=transaksi.id_barang');
        $this->db->where('transaksi.user_id',$w);
        $this->db->order_by('tgl_tsk','DESC');
        return $this->db->get('transaksi');
    }

    public function fetch_data($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$data = $this->db->get('barang');
		return $data->result();
 
	}
}