<?php

if (
	$_SERVER["REQUEST_METHOD"] == "POST" && [
		"nama",
		"tempat_lahir",
		"tanggal_lahir",
		"jenis_kelamin",
		"alamat",
		"no_hp",
		"fakultas",
		"prodi",
		"pesan_kesan"
	] === array_keys($_POST)
) {
	$nama = $_POST["nama"];
	$tempat_lahir = $_POST["tempat_lahir"];
	$tanggal_lahir = $_POST["tanggal_lahir"];
	$jenis_kelamin = $_POST["jenis_kelamin"] == "L" ? "Laki-laki" : "Perempuan";
	$alamat = $_POST["alamat"];
	$no_hp = $_POST["no_hp"];
	$fakultas = $_POST["fakultas"] == "fasilkom" ? "Fakultas Ilmu Komputer" : "Fakultas Lain";
	$prodi_first = $_POST["prodi"];
	$pesan_kesan = $_POST["pesan_kesan"];

	switch ($prodi_first) {
		case "if":
			$prodi = "Informatika";
			break;
		case "si":
			$prodi = "Sistem Informasi";
			break;
		case "ti":
			$prodi = "Teknologi Informasi";
			break;
		default:
			$prodi = "Prodi Lain";
			break;
	}
} else {
	header("Location: /");
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="bootstrap-custom.css" />
	<title>Data Mahasiswa - <?= $nama ?></title>
</head>

<body>
	<div class="container my-4 p-4 bg-dark rounded-4">
		<header class="text-center pt-3">
			<div class="container-fluid text-center mb-2">
				<img src="img/user.png" height="175" alt="mahasiswa" />
			</div>
			<h4 class="text-white">Data Mahasiswa - <?= $nama ?></h4>
		</header>
		<hr />
		<!-- Menampilkan data yang telah disimpan -->
		<div class="container-fluid bg-light rounded-4 p-3 pt-2">
			<table class="table table-bordered border-secondary table-hover rounded-3">
				<tr>
					<td class="col-3 text-dark">Nama Lengkap:</td>
					<td class="col-9 text-dark"><?= $nama ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Tempat, Tanggal Lahir:</td>
					<td class="col-9 text-dark"><?= $tempat_lahir ?>, <?= $tanggal_lahir ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Jenis Kelamin:</td>
					<td class="col-9 text-dark"><?= $jenis_kelamin ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Alamat:</td>
					<td class="col-9 text-dark"><?= $alamat ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Nomor HP:</td>
					<td class="col-9 text-dark"><?= $no_hp ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Fakultas dan Prodi:</td>
					<td class="col-9 text-dark"><?= $fakultas ?>, Prodi <?= $prodi ?></td>
				</tr>
				<tr>
					<td class="col-3 text-dark">Pesan dan Kesan:</td>
					<td class="col-9 text-dark"><?= $pesan_kesan ?></td>
				</tr>
			</table>
			<div class="text-center">
				<a href="/" class="btn btn-primary w-25 rounded-5 text-light"><span>Kembali</span></a>
			</div>
		</div>
	</div>
</body>

</html>

