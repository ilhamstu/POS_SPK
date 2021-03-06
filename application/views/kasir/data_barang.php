<div class="row">
    <div class="page-title">
        <div class="title_left">
            <h3>Datang Barang</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left"
                    action="<?= base_url('kasir/cari_brg')?>" method="post" novalidate="">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control" placeholder="Cari barang...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Rincian <small>Data Barang</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <!-- <li><a href="#"><i class="fa fa-plus"></i></a></li> -->
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- <li><a class="close-link"><i class="fa fa-close"></i></a> -->
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">No.</th>
                                        <th class="column-title">Nama Barang </th>
                                        <th class="column-title">Stok Tersedia</th>
                                        <th class="column-title">Harga</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                      $no = 1;
                      foreach ($brg as $item) {?>
                                    <tr class="even pointer">
                                        <td class=" "><?= $no++;?></td>
                                        <td class=" "><?= $item->nama_barang;?></td>
                                        <td class=" "><?= $item->stok-$item->terjual;?></td>
                                        <td class="a-right a-right ">
                                            <?= "Rp. ".number_format($item->harga, 0, ".","."); ?></td>
                                        <td class=" last">
                                            <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger hapus" nama="<?= $item->nama_barang?>"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                    <?= $tampilsemua;?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>