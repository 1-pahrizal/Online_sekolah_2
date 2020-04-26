<?php 
	session_start();
	include 'configuration.php';
 ?>
<body onload="window.print()">
<!DOCTYPE html>
<html>
<head>
</head>

	<br><br>	
	<center>
	<font size="6"><b> Print Data Siswa </font></b><br>
	<br>	
	
		<fieldset style="width: auto; height: auto; padding: 20px; border:2px solid blue; box-shadow:0 0 10px #6F00FF;">

		<tr>
			<td align="center" width="250">Nama Lengkap :</td>

			<?php
		$sql = "SELECT * FROM tbl_data_siswa ORDER BY nama ASC";
		$query = mysqli_query($db, $sql);
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
		}		
		?>
		</tr>
		<td>&nbsp;|&nbsp;</td>

		<tr>
			<td align="center" width="250">Jenis Kelamin :</td>

			<?php
		$sql = "SELECT * FROM tbl_data_siswa ORDER BY nama ASC";
		$query = mysqli_query($db, $sql);
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
		}		
		?>
		</tr>	
	</tbody>
	</table>	
	</body>
</html>

</body>

 	
