<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM produk");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Utama</title>
 </head>
 <body>
 <a href="add.php"> Tambah produk </a><br><br>
 	<table width="80%" border="1">
 		<caption>Data Produk</caption>
 		<thead>
 			<tr>
 				<th>Nama Produk</th>
 				<th>Keterangan</th>
 				<th>Harga</th>
 				<th>Jumlah</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php 
 				while ($user_data = mysqli_fetch_array($result)) {
 					echo "<tr>";
 					echo "<td>".$user_data[1]."</td>";
 					echo "<td>".$user_data[2]."</td>";
 					echo "<td>".$user_data[3]."</td>";
 					echo "<td>".$user_data[4]."</td>";
 					echo "<td><a href='edit.php?id=$user_data[0]'>Edit</a> | <a href='delete.php?id=$user_data[0]'>Hapus</a></td>";
 					echo "</tr>";
 				}
 				
 			 ?>
 			
 		</tbody>
 	</table>

 </body>
 </html>