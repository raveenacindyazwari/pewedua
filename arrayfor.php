<!DOCTYPE html>
<html>
<head>
	<title>Tabel 1</title>
</head>
	<body>
		<?php 
				$prodi=[
				[
				"id"=>0,
				"nama"=>"kimia",
				"kuota"=>12,
				"kaprodi"=>"Andi"
				],

				[
				"id"=>1,
				"nama"=>"fisika",
				"kuota"=>14,
				"kaprodi"=>"dosen"
				],

				[
				"id"=>2,
				"nama"=>"biologi",
				"kuota"=>12,
				"kaprodi"=>"rizalinda"
				],

				[
				"id"=>3,
				"nama"=>"sisfo",
				"kuota"=>32,
				"kaprodi"=>"ilham"
				],

				[
				"id"=>4,
				"nama"=>"kelautan",
				"kuota"=>11,
				"kaprodi"=>"nora"
				],

				[
				"id"=>5,
				"nama"=>"statistika",
				"kuota"=>15,
				"kaprodi"=>"naomi"
				],

				[
				"id"=>6,
				"nama"=>"matematika",
				"kuota"=>12,
				"kaprodi"=>"mariatul"
				],	
			];

	 	?>
	<h1> Latihan Tabel</h1>
		<table border="1"; cellpadding="2"; cellspacing="0">
			<tr>
				<th>Id</th>
				<th>Nama Prodi</th>
				<th>Kuota</th>
				<th>kaprodi</th>
			</tr>
	<?php 
		for ($i=1; $i <=100 ; $i++):
	?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>Sisfo</td>
				<td><?php echo $i*3; ?></td>
				<td>
					<?php if ($i%2):?>
						Ilhamsyah
					<?php else:?>
						Renny	
					<?php endif; ?>
				</td>
			</tr>
	<?php 
		endfor;
 	 ?>
		</table>
	</body>
</html>