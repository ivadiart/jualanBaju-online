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

    <?php if (session()->getFlashdata('alert') == 'hapus_bukutamu'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil dihapus
        </div>
    <?php endif; ?>


			<div class="card-header">
				<h1 style="text-align: center">Data Buku Tamu</h1>
			</div>
			<hr>
			<div class="card-body">
				<table style="width:100%" class="table table-bordered zero-configuration">
					<thead>
					<tr>
						<th>NO</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Komentar</th>
						<th style="text-align: center"><i class="ft-settings spinner"></i></th>
					</tr>
					</thead>

					<tbody>
				<?php $no=1; foreach($bukutamu as $value){?>

						<tr>
							<td><?= $no;?></td>
							<td><?= $value['nama']?></td>
							<td><?= $value['email']?></td>
							<td><?= $value['komen']?></td>
								<td class="text-center">

								<button
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 produk-hapus"
										data-toggle="modal" data-target="#hapus<?= $value['id'];?>" value=""
										title="Hapus data"><i class="ft-trash"></i></button>
									
							</td>		

						</tr>
						<?php $no++;}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<?php $no=1; foreach($bukutamu as $data){?>


<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus<?= $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<input name="id" value="<?= $data['id']?>"  hidden />
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Bukutamu ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
				<div id="">
					<a href="<?= base_url('admin/hapus_bukutamu/'.$data['id']);?>" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $no++;}?>

        <!--END-->
        </div>
    </div>
</div>

</body>
</html>
