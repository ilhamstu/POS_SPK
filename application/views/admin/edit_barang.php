<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form <small>Tambah Barang</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form action="<?= base_url('a/update-barang')?>" method="post" id="demo-form2" data-parsley-validate=""
                    class="form-horizontal form-label-left">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Barang</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="hidden" value="<?= $brg->id_barang;?>" name="id">
                            <input type="text" name="namabrg" class="form-control" value="<?= $brg->nama_barang?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="hrg" class="form-control" value="<?= $brg->harga?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stok</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control" type="text" name="stok" value="<?= $brg->stok?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Kategori</label>
                        <div class="col-md-6 col-sm-6">
                            <select class="form-control" name="kat" id="carbar">
                                <?php
                            foreach ($ktgr as $item){?>
                                <option value="<?= $item->id_kategori?>"
                                    <?= $brg->id_kategori == $item->id_kategori ? "selected" : null ;?>>
                                    <?= $item->nama_kategori?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="<?= base_url('a/data-barang')?>" class="btn btn-primary" type="button">Cancel</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>