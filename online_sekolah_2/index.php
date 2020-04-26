<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<style type="text/css">
    select {
        width: 160px;
		height: 40px;

    }
    body {
    	background-color: lightblue;
    	background-image: url(bg1.png); 
    }
</style>
<body style="font-family: sans-serif;">

    <br><br><br><br><br><br><br>
    <center>
	<font size="10"><b>Formulir Pendaftaran Garut </b></font><br><br>
    <table border=0>
        <tr>
            <td align="center"><a href="form-pendaftaran.php"><img src="icon/oo.png" width="84" height="84" title="Tambah Data Siswa"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="list-database.php"><img src="icon/lihat.png" width="84" height="84" title="Lihat Data Siswa"/></a></td>
            
            
        </tr>  
        
        <tr>
            <td align="center"><br>Tambah Data Siswa</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Lihat Data Siswa</td>
        </tr>
    </table>

	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<br><br>* Data Berhasil Ditambah, <a href='list-database.php'>Lihat Data</a>";
				echo "<br><br>* Print Data, <a href='cetak.php'>Print Data</a>";

			} else {
				echo "<br><br>Pendaftaran gagal!, Mohon cek file program!";
			}
		?>
	</p>
	<?php endif; ?>





	 <footer class="navbar navbar-dark bg-dark justify-content-center">
	  <p class="text-white text-center">
        Di buat oleh Teman pahrizal siap 
      </p>
    </footer>
   	 </center>
	</body>
</html>
