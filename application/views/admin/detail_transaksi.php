<div class="">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Rincian <small>Transaksi</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <!-- <li><a href="<?= base_url('a/tambah-barang')?>"><i class="fa fa-plus"></i></a></li> -->
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
                                        <th class="column-title"> Operator </th>
                                        <th class="column-title">Nama Barang</th>
                                        <th class="column-title">Jumlah Terjual</th>
                                        <th class="column-title">Tanggal</th>
                                    </tr>
                                </thead>
                                <?php
                      $no = 1;
                      foreach ($tsk as $item) {?>
                                <tbody>
                                    <tr class="even pointer">
                                        <td class=" "><?= $no++;?></td>
                                        <td class=" "><?= $item->nama;?></td>
                                        <td class=" "><?= $item->nama_barang;?></td>
                                        <td class=" "><?= $item->jml;?></td>
                                        <td class=" "><?= $item->tgl_tsk; ?></td>
                                    </tr>
                                </tbody>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>