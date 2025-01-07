<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
<div style="position:relative;bottom:80vh;" class="app-content content">
	<div class="content-wrapper">
		<div class="content-body"><!-- Revenue, Hit Rate & Deals -->
        <!--START-->
        
		<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">

		<?php if (session()->getFlashdata('alert') == 'tambah_kategori'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil ditambahkan
        </div>
    <?php elseif (session()->getFlashdata('alert') == 'update_transaksi'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil diupdate
        </div>
    <?php elseif (session()->getFlashdata('alert') == 'hapus_kategori'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil dihapus
        </div>
    <?php endif; ?>


			<div class="card-header">
				<h1 style="text-align: center">Data Transaksi</h1>
			</div>
			<hr>
			<div class="card-body">
				<table style="width:100%" class="table table-responsive table-bordered zero-configuration">
					<thead>
					<tr>
						<th width="30">NO</th>
						<th>No Pesanan</th>
						<th>Nama</th>
						<th colspan="3" class="text-center">Alamat</th>
						<th>No Telepon</th>
						<th>Status</th>
						<th>Tanggal Pesan</th>
						<th>Pengiriman</th>
						<th>Total Bayar</th>
					</tr>
					</thead>

					<tbody>
					<?php $no=1; foreach($transaksi as $value){?>
						<tr>
							<td><?=$no?></td>
							<td><?=$value['no_pesanan']?></td>
							<td><?=$value['nama']?></td>
							<td class="text-nowrap"><?=$value['alamat']?></td>
							<td><?=$value['alamat_jln']?></td>
							<td><?=$value['alamat_blok']?></td>
							<td><?=$value['telp']?></td>
							<td>
								<?php
								if($value['status'] == 'Completed'){?>
									<div class="text-white btn badge badge-success"><i class="ft-check-circle"></i> <?=$value['status']?></div>
								<?php }elseif($value['status'] == 'Processing'){?>
								<button data-toggle="modal" data-target="#status<?=$value['id_checkout']?>" class="btn badge badge-warning"><i class="ft-x-circle"></i> <?=$value['status']?></button>
								<?php } ?>
							</td>
							<td><?=$value['tanggal_pesan']?></td>
							<td><?=$value['pengiriman']?></td>
							<td>Rp.<?= number_format(floatval($value['total_bayar']), 2, ',', '.'); ?></td>


						</tr>

						<?php $no++;}?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $no=1; foreach($transaksi as $data){?>


<!-- Modal edit -->
<div class="modal fade text-left" id="status<?=$data['id_checkout']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<?= form_open('admin/data_transaksi/status/') ?>

		<input name="id" value="<?= $data['id_checkout']?>"  hidden />
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Anda yakin ingin mengubahnya ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-danger btn-bg-gradient-x-red-pink" data-dismiss="modal" value="Tutup">
                <button type="submit" class="btn btn-secondary btn-bg-gradient-x-blue-cyan">Update</button>
			</div>
		</div>
		<?= form_close() ?>
	</div>
</div>

<?php $no++;}?>


        <!--END-->
        </div>
    </div>
</div>

</body>
</html>
