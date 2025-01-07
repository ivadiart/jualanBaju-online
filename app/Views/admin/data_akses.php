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

		<?php if (session()->getFlashdata('alert') == 'tambah_akses'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil ditambahkan
        </div>
    <?php elseif (session()->getFlashdata('alert') == 'update_akses'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil diupdate
        </div>
    <?php elseif (session()->getFlashdata('alert') == 'hapus_akses'): ?>
        <div style="position:absolute;width:100%;" class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data berhasil dihapus
        </div>
    <?php endif; ?>


			<div class="card-header">
				<h1 style="text-align: center">Data Akses</h1>
				<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2"
						data-toggle="modal" data-target="#bootstrap">
					<i class="ft-plus-circle"></i> Tambah data akses
				</button>
			</div>
			<hr>
			<div class="card-body">
				<table style="width:100%" class="table table-bordered zero-configuration">
					<thead>
					<tr>
						<th>NO</th>
						<th>USERNAME</th>
						<th>PASSWORD</th>
						<th>Level</th>
						<th style="text-align: center"><i class="ft-settings spinner"></i></th>
					</tr>
					</thead>

					<tbody>
				<?php $no=1; foreach($akses as $value){?>

						<tr>
							<td><?= $no;?></td>
							<td><?= $value['username']?></td>
							<td><?= $value['password']?></td>
							<td><?= $value['level']?></td>
								<td>

								<?php
									if ($value['id'] == 1){ ?>
											<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2"
										data-toggle="modal" data-target="#ubah<?= $value['id']?>" value=""
										title="Update data akses"><i class="ft-edit"></i></button>
									
								<?php
								}else{?>
									<button
										class="btn btn-success btn-sm  btn-bg-gradient-x-blue-green box-shadow-2"
										data-toggle="modal" data-target="#ubah<?= $value['id']?>" value=""
										title="Update data akses"><i class="ft-edit"></i></button>

									<button
										class="btn btn-danger btn-sm  btn-bg-gradient-x-red-pink box-shadow-2 produk-hapus"
										data-toggle="modal" data-target="#hapus<?= $value['id'];?>" value=""
										title="Hapus data"><i class="ft-trash"></i></button>									<?php
								}
								?>
								
									
							</td>		

						</tr>
						<?php $no++;}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal tambah -->
<div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah Data Akses</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/tambah_akses')?>">
                        <div class="modal-body">
                          
                          <div class="form-group">
                            <label>USERNAME </label>
                            <input type="text" class="form-control" name="username" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="text" class="form-control" name="password" placeholder="Password">
                          </div>
                          <div class="form-group">
						  <label>Level</label>
                          <select class="form-control col-3" name="level" >
                            <option value="admin">Admin</option>
                          </select>
                          </div>
						  
                          </div>
						  <div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" value="Simpan">
			</div>
                      </form>
			
		</div>
	</div>
</div>

<?php $no=1; foreach($akses as $data){?>


<!-- Modal update -->
<div class="modal fade text-left" id="ubah<?= $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Update Data Akses</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/update_akses')?>">
                      <div class="modal-body">
                        <input name="id" value="<?= $data['id']?>"  hidden />
                        <div class="form-group">
                          <label>USERNAME</label>
                            <input class="form-control" type="text" name="username" value="<?= $data['username']?>" required=""/>
                        </div>

                        <div class="form-group">
                          <label>PASSWORD</label>
                              <input class="form-control" type="text" name="password" required=""/>
                        </div>

						<div class="form-group">
                          <label>Level</label>
                              <input class="form-control col-3" type="text" name="level" value="<?= $data['level']?>" readonly/>
                        </div>
						
                        
                          

                        </div>
                         
						<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" value="Update">
			</div>
                      </div>
					  
			
                    </form>
			
		</div>
	</div>
</div>

<!-- Modal hapus -->
<div class="modal fade text-left" id="hapus<?= $data['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<input name="id" value="<?= $data['id']?>"  hidden />
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Hapus Data Petugas ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal" value="Tutup">
				<div id="">
					<a href="<?= base_url('admin/hapus_akses/'.$data['id']);?>" class="btn btn-danger btn-bg-gradient-x-red-pink">Hapus</a>
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
