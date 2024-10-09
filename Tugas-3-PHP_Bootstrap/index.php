<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=s, initial-scale=1.0" />
	<link rel="stylesheet" href="bootstrap-custom.css" />
	<title>Form Pengisian Data Detail Mahasisw</title>
</head>

<body>
	<div class="container my-4 p-4 bg-dark rounded-4">
		<header class="text-center pt-3">
			<div class="container-fluid text-center mb-2">
				<img src="img/user.png" height="175" alt="mahasiswa" />
			</div>
			<h4 class="text-white">Form Pengisian Data Detail Mahasiswa</h4>
		</header>
		<hr />
		<form class="container-fluid bg-light rounded-4 p-3 pt-2" action="show.php" method="post">
			<div class="mb-3">
				<label for="nama" class="form-label">Nama Lengkap *</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda (Zainul Muhaimin)" required />
			</div>
			<div class="row">
				<div class="col-6">
					<div class="mb-3">
						<label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
							placeholder="Tempat Lahir Anda" required />
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
						<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required />
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
				<select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
					<option value="L">Laki-laki</option>
					<option value="P">Perempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat *</label>
				<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" required></textarea>
			</div>
			<div class="mb-3">
				<label for="no_hp" class="form-label">No. HP *</label>
				<input type="tel" class="form-control" id="no_hp" name="no_hp" pattern="08[0-9]{10,13}"
					oninvalid="this.setCustomValidity('Harap masukkan nomor telepon Indonesia yang valid dimulai dengan 08 dan berisi 10-13 digit.')"
					oninput="this.setCustomValidity('')" placeholder="Nomor HP Anda" required />
			</div>
			<div class="row">
				<div class="col-6">
					<div class="mb-3">
						<label for="fakultas" class="form-label">Fakultas *</label>
						<select class="form-select" id="fakultas" name="fakultas" required>
							<option value="fasilkom" selected>Fakultas Ilmu Komputer</option>
							<option value="lain">Fakultas Lain</option>
						</select>
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<label for="prodi" class="form-label">Prodi *</label>
						<select class="form-select" id="prodi" name="prodi" required>
							<option value="if">Informatika</option>
							<option value="si">Sistem Informasi</option>
							<option value="ti" selected>Teknologi Informasi</option>
						</select>
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="pesan_kesan" class="form-label">Pesan & Kesan *</label>
				<textarea class="form-control" id="pesan_kesan" name="pesan_kesan" placeholder="Isi Pesan dan Kesan"
					required></textarea>
			</div>
			<div class="text-center pt-1 pb-3">
				<button type="submit" class="btn btn-primary w-25 rounded-5 text-light">
					<span>Simpan</span>
				</button>
				<button type="reset" class="btn btn-danger w-25 rounded-5 text-light">
					<span>Reset</span>
				</button>
			</div>
		</form>
	</div>
</body>

</html>


