<?php 

	include_once '../controller/test.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pertemuan ke 9</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom mb-3">
	  <a class="navbar-brand text-secondary" href="#">LOGO</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"></ul>
	    <ul class="navbar-nav">
	      <li class="mr-5 nav-item pt-1 active">
	        <a class="nav-link" href="#"><u>Home</u> <span class="sr-only">(current)</span></a>
	      </li>
		  <li class="mr-5 nav-item pt-1">
	        <a class="nav-link" href="#">
	        	<u>Contact</u>
	        </a>
	      </li>
		  <li class="mr-5 nav-item pt-1">
	        <a class="nav-link" href="#">
	        	<u>About</u>
	        </a>
	      </li>
	      <li class="nav-item mr-5">
	        <h4 data-toggle="modal" data-target="#exampleModalCenter"><a class="nav-link" href="#">LOGIN</a></h4>
	      </li>
	    </ul>
	  </div>
	</nav>
	<!-- End Navbar -->

	<!-- Start Content -->
	<div class="container-fluid pt-5">
		<div class="row">
			<div class="col-12 col-xl-6 mb-3">
				<!-- Form Section -->
				<div class="card">
					<div class="card-body">
						<form>
						  <div class="form-group">
						    <label for="nama-lengkap">Nama Lengkap</label>
						    <input type="text" class="form-control form-control-sm" id="nama-lengkap" placeholder="Masukkan nama lengkap">
						  </div>
						  <div class="form-group">
						    <label for="no-telp">No Telepon</label>
						    <input type="text" class="form-control form-control-sm" id="no-telp" placeholder="No Telepon">
						  </div>
						  <div class="form-group">
						    <label for="jenis-kelamin">Jenis Kelamin</label>
							<select class="custom-select">
							  <option selected>-- Jenis kelamin --</option>
							  <option value="1">Laki - Laki</option>
							  <option value="2">Perempuan</option>
							</select>
						  </div>
						  <button type="submit" class="btn btn-primary btn-sm w-100">Submit</button>
						</form>
					</div>
				</div>
				<!-- End Form Section -->
			</div>
			<div class="col-12 col-xl-6 mb-3">
				<div class="card">
					<div class="card-body">
						<?php 

							$data = [
								['nama' => 'Nasrul Fuad', 'email' => 'nasrul@email.com', 'alamat' => 'Jl.Sumatera Balung, Jember'],
						 		['nama' => 'John Doe', 'email' => 'john@email.com', 'alamat' => 'Jl.Kenangan Balung, Jember'],
								['nama' => 'Max Payne', 'email' => 'max@email.com', 'alamat' => 'Jl.Mimpi Balung, Jember'],
							];

						?>
						<h3 class="text-center">Data</h3>
						<table class="table table-sm table-hover">
							<thead>
								<th>No</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Alamat</th>
							</thead>
							<tbody>
								<?php 
									foreach ($data as $v => $i) { ?>	
									<tr>
										<td><?= ++$v; ?></td>
										<td><?= $i['nama']; ?></td>
										<td><?= $i['email']; ?></td>
										<td><?= $i['alamat']; ?></td>
									</tr>
								<?php	} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$bilA = 10;
		$bilB = 0;
		$hasil;
		if(penjumlahan($bilA, $bilB) <= 15)
			$hasil = 'Nilai penjumlahan lebih sedikit dari 15';
		else
			$hasil = penjumlahan($bilA, $bilB);
	?>
	<h2>Nilai bil A&nbsp;= <?= $bilA; ?></h2>
	<h2>Nilai bil B&nbsp;= <?= $bilB; ?></h2>
	<h2><?= $hasil ?></h2>
	<!-- End Content -->
</body>
</html>
