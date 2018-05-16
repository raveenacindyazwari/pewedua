<!DOCTYPE html>
<html>
<head>
	<title>Tabel 1</title>
</head>
	<body>
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