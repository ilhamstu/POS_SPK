<div class="page-title">
	<div class="title_left">
		<h3>Input Pembelian Barang</h3>
	</div>

	<div class="title_right">
		<div class="col-md-5 col-sm-5   form-group pull-right top_search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-secondary" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Rincian <small>Data Barang</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							aria-expanded="false"><i class="fa fa-wrench"></i></a>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<form action="<?= base_url('kasir/transaksi_masuk')?>" method="post">
					<div class="table-responsive">
						<div class="col-md-4 col-sm-4">
							<select nama="pilbar" class="form-control">
								<?php
                                foreach ($brg as $item) {?>
								<option value="<?php echo $item->id_barang;?>"><?= $item->nama_barang;?></option>
								<?php }?>
							</select>
						</div>
						<div class="col-md-4 col-sm-4">
							<input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
						</div>
						<div class="col-md-4 col-sm-4">
							<button class="btn btn-success" type="submit">
								<i class="glyphicon glyphicon-plus"></i> Add
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>