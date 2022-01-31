<div class="row">
    <div class="page-title">
        <div class="title_left">
            <h3>Input Pembelian Barang</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Input <small>Pembelian</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"
                    action="<?= base_url('kasir/transaksi_masuk')?>" method="post" novalidate="">
                    <div class="col-md-4">
                        <select class="form-control" name="pilbar" id="carbar">
                            <?php
                            foreach ($brg as $item){?>
                            <option value="<?= $item->id_barang?>"><?= $item->nama_barang?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="jumlah" placeholder="1">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success" value="+">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Rincian <small>Pembelian</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-hover jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">No.</th>
                                <th class="column-title">Nama Barang </th>
                                <th class="column-title">Jumlah</th>
                                <th class="column-title">Harga</th>
                                <th class="column-title">SubTotal</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      $no = 1;
                      $th = 0;
                      foreach ($beli as $item) {?>
                            <tr class="even pointer">
                                <td class=" "><?= $no++;?></td>
                                <td class=" "><?= $item->nama_barang;?></td>
                                <td class=" "><?= $item->jumlah;?></td>
                                <td class="a-right a-right "><?= "Rp. ".number_format($item->harga, 0, ".","."); ?></td>
                                <td class="a-right a-right "><?= "Rp. ".number_format($item->total, 0, ".","."); ?></td>
                                <td class=" last" align="center"><a
                                        href="<?= base_url('kasir/hapus_daftar_beli/'.$item->id_transaksi)?>"
                                        class="btn btn-danger">x</a></td>
                                <input type="text" value="<?= $th = $th+$item->total;?>" name="total_harga" hidden>
                                <input type="text" value="<?= $item->id_transaksi;?>" name="id_tr" hidden>
                            </tr>
                            <?php }?>
                            <tr>
                                <td colspan="5" align="center"><b>Total Harga</b></td>
                                <td>: Rp. <b><input type="text" id="subtotal" value="<?= $th; ?>" disabled></b></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="center"><b>Total Bayar</b></td>
                                <td>: Rp. <b><input type="text" name="bayar" id="totbay"></b></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="center"><b>Kembalian</b></td>
                                <td>: Rp. <b><input type="text" name="bayar" id="kembalian" disabled></b></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="center"></td>
                                <td align="center"><a href="<?= base_url('proses-transaksi')?>"
                                        class="btn btn-success">Selesai</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>