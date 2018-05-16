<!DOCTYPE html>
<html>
<head>
	<title> Registrasi</title>
</head>
<body>
	<?php 
		$kabupaten [
					[	"id"=>1
						"nama_kab"=>"Pontianak"
					],
					[	"id"=>2
						"nama_kab"=>"Mempawah"
					],
					[	"id"=>3
						"nama_kab"=>"Sintang"
					],
					[	"id"=>4
						"nama_kab"=>"Sambas"
					]
		];
	 ?>
	<h1>Registrasi</h1>
	<form method="POST" action="proses.php?>">
		<table>
			<tr>
				<td> Username</td>
				<td><input type="text" name="id"> </td>
			</tr>
			<tr>
				<td> Password</td>
				<td><input type="text" name="pass" > </td>
			</tr>
			<tr>
				<td> Nama</td>
				<td><input type="nama" name="name"> </td>
			</tr>
			<tr>
				<td> No. Hp</td>
				<td><input type="text" name="telepon"> </td>
			</tr>
			<tr>
				<td> Alamat</td>
				<td><textarea name="jalan"></textarea> </td> 
			</tr>
			<tr>
				<td> Kabupaten</td>
				<td> <select name="kabupaten">
					<?php foreach ($kabupaten as $kab): ?>
					<option value="<?php echo $kab['id']?>" <?php echo $kab['nama_kab'];?></option>
					<?php endforeach ?>
					</option> </td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> <input type="radio" name="Jenis Kelamin">Laki-Laki
					<input type="radio" name="Jenis Kelamin">Perempuan
				</td>
			</tr>
			<tr>
				<td>Prodi Pilihan</td>
				<td> <option>
					<input type="checkbox" name="Prodi">Sistem Informasi<br>
					<input type="checkbox" name="Prodi">Sistem Komputer<br>
					<input type="checkbox" name="Prodi">Matematika<br>
					</option> </td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Simpan"> </td>
			</tr>
		</table>
	</form>
</body>
</html>