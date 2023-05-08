<?php	
	$BASE_URL = realpath(dirname(__DIR__).'\..');
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="/maju_jaya/index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php include($BASE_URL.'/sidenav.php') ?>

		<div class="p-5">		
            <form action="/maju_jaya/controller/penjualan/add.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <h5 class="mb-4">Form Add Penjualan</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>id_pengguna</label>
                                <input name="id_pengguna" id="id_pengguna" class="form-control" placeholder="Masukan Pengguna..." required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>id_barang</label>
                                <input name="id_barang" id="id_barang" class="form-control" placeholder="Masukan barang..." required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Jumlah Penjualan</label>
                                <input name="jumlah_penjualan" id="jumlah_penjualan" class="form-control" placeholder="Masukan Jumlah Penjualan..." required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga Penjualan</label>
                                <textarea name="harga_jual" id="harga_jual" class="form-control" placeholder="Masukan Harga Penjualan..." required rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" name="add" value="Add">Add</button>
                    <a href="/maju_jaya/view/Penjualan" class="btn btn-danger mt-4" role="button" aria-disabled="true">Batal</a>
                </div>
            </form>

        </div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/f65023b3df.js" crossorigin="anonymous"></script>
	</body>
</html>