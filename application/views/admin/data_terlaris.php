    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Rincian <small>Barang Terlaris</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <!-- <li><a href="<?= base_url('a/tambah-barang')?>"><i class="fa fa-plus"></i></a></li> -->
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row"
                            style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                            <div class="table-responsive">
                                <?php
								if ($prsn < 1) {?>
                                <table class="table table-striped jambo_table">
                                    <tbody>
                                        <tr class="even-pointer">
                                            <td class=" " align="center"><a href="<?= base_url('a/hitung')?>"
                                                    class="btn btn-primary">Proses Penghitungan</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php }else{?>
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">No.</th>
                                            <th class="column-title">Nama Barang </th>
                                            <th class="column-title">Terjual (%)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$no = 1;
										foreach ($hhitung as $item) {?>
                                        <tr class="even pointer">
                                            <td class=" "><?= $no++;?></td>
                                            <td class=" "><?= $item->nama_barang;?></td>
                                            <td class=" "><?= $item->angka_penjualan;?></td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <td class=" " align="center" colspan="3">
                                                <a href="<?= base_url('a/hitung-ulang')?>"
                                                    class="btn btn-primary">Hitung Ulang</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>