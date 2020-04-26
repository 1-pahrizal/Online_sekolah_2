<?php 

    include("configuration.php");

    if( !isset($_GET['id']) ){
        // kalau tidak ada id di query string
        header('Location: list-siswa.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM tbl_data_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if(mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data Siswa</title>
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
</style>

<body style="font-family: monospace;">
	<br><br>
	<center>
		<font size="16"><b> Ubah Data Siswa </font></b><br>
		<td><a href="index.php">Menu</a>&nbsp;|&nbsp;<a href="list-database.php">Lihat Data</a></td>
	</center>
	<center>
	<br><br>
	
	<form action="proses-edit-data.php" method="POST">

        <fieldset style="width: 550px; height: auto; padding: 20px; border:2px solid blue; box-shadow:0 0 10px #6F00FF;">
            <table border=0>
				<tr>
					<td></td>
					<td></td>
					<td valign="top"><input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="nama">Nama Lengkap</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="nama_p">Nama Panggilan</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="nama_p" placeholder="nama panggilan" value="<?php echo $siswa['nama_p'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="top"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
					<td valign="top">:</td>
					<td valign="top">
						<?php $jk = $siswa['jenis_kelamin']; ?>
						<label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label><br>
						<label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
					</td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="agama">Agama</label></td>
					<td valign="center">:</td>
					<?php $agama = $siswa['agama']; ?>
					<td valign="center">
						<select name="agama">
							<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
							<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
							<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
							<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
							<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="ttl">Tempat, Tanggal Lahir</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ttl" placeholder="ttl" value="<?php echo $siswa['ttl'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="cita">Cita-Cita</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="cita" placeholder="cita" value="<?php echo $siswa['cita'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="hobi">Hoby</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="hobi" placeholder="cita" value="<?php echo $siswa['hobi'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="anak">Anak-ke</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="anak" placeholder="anak" value="<?php echo $siswa['anak'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="saudara">Jumlah Saudara</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="saudara" placeholder="saudara" value="<?php echo $siswa['saudara'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="berat">Berat Badan</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="berat" placeholder="berat" value="<?php echo $siswa['berat'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="tinggi">Tinggi Badan</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="tinggi" placeholder="tinggi" value="<?php echo $siswa['tinggi'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="darah">Golongan Darah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="darah" placeholder="darah" value="<?php echo $siswa['darah'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="alamat">Alamat</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="alamat" placeholder="alamat" value="<?php echo $siswa['alamat'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="kelurahan">Kelurahan</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="kelurahan" placeholder="kelurahan" value="<?php echo $siswa['kelurahan'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="kecamatan">Kecamatan</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="kecamatan" placeholder="kecamatan" value="<?php echo $siswa['kecamatan'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="kot">Kota/Kabupaten</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="kot" placeholder="kota/kabupaten" value="<?php echo $siswa['kot'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="provinsi">Provinsi</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="provinsi" placeholder="provinsi" value="<?php echo $siswa['provinsi'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="telp">NO.Telp</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="telp" placeholder="telp" value="<?php echo $siswa['telp'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="email">Email</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="email" placeholder="email" value="<?php echo $siswa['email'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="tinggal">Tinggal Dengan</label></td>
					<td valign="center">:</td>
					<?php $tinggal = $siswa['tinggal']; ?>
					<td valign="center">
						<select name="tinggal">
							<option <?php echo ($tinggal == 'Orang Tua') ? "selected": "" ?>>Orang Tua</option>
							<option <?php echo ($tinggal == 'Asrama') ? "selected": "" ?>>Asrama</option>
							<option <?php echo ($tinggal == 'Saudara') ? "selected": "" ?>>Saudara</option>
							
						</select>
					</td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="kit">Penyakit yg Pernah Diderita(sebutkan/kapan)</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="kit" placeholder="" value="<?php echo $siswa['kit'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="lain">Kelainan Jasmani/Lainny</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="lain" placeholder="" value="<?php echo $siswa['lain'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="na">Nama Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="na" placeholder="" value="<?php echo $siswa['na'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ta">TTL Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ta" placeholder="" value="<?php echo $siswa['ta'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="pa">Pekerjaan Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="pa" placeholder="" value="<?php echo $siswa['pa'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="pta">Pendidikan Terakhir Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="pta" placeholder="" value="<?php echo $siswa['pta'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ga">Kewarganegaraan/Agama Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ga" placeholder="" value="<?php echo $siswa['ga'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="noa">NO tlp/WA Ayah</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="noa" placeholder="" value="<?php echo $siswa['noa'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="ni">Nama Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ni" placeholder="" value="<?php echo $siswa['ni'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ti">TTL Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ti" placeholder="" value="<?php echo $siswa['ti'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="pi">Pekerjaan Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="pi" placeholder="" value="<?php echo $siswa['pi'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="pti">Pendidikan Terakhir Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="pti" placeholder="" value="<?php echo $siswa['pti'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="gi">Kewarganegaraan/Agama Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="gi" placeholder="" value="<?php echo $siswa['gi'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="noi">NO tlp/WA Ibu</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="noi" placeholder="" value="<?php echo $siswa['noi'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="nw">Nama Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="nw" placeholder="" value="<?php echo $siswa['nw'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="tw">TTL Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="tw" placeholder="" value="<?php echo $siswa['tw'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="pw">Pekerjaan Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="pw" placeholder="" value="<?php echo $siswa['pw'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ptw">Pendidikan Terakhir Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ptw" placeholder="" value="<?php echo $siswa['ptw'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="hm">Hubungan Dengan Murid</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="hm" placeholder="" value="<?php echo $siswa['hm'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="gw">Kewarganegaraan/Agama Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="gw" placeholder="" value="<?php echo $siswa['gw'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="now">NO tlp/WA Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="now" placeholder="" value="<?php echo $siswa['now'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ew">Email Wali</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="ew" placeholder="" value="<?php echo $siswa['ew'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="aa">PAI 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="aa" placeholder="" value="<?php echo $siswa['aa'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ba">Bahasa Indonesia 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="ba" placeholder="" value="<?php echo $siswa['ba'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ca">Bahasa Inggris 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="ca" placeholder="" value="<?php echo $siswa['ca'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="da">Matematika 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="da" placeholder="" value="<?php echo $siswa['da'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ea">IPA 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="ea" placeholder="" value="<?php echo $siswa['ea'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="fa">IPS 7 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="fa" placeholder="" value="<?php echo $siswa['fa'] ?>" /></td>
				</tr>

				<tr>

					<tr>
					<td width="200" valign="center"><label for="ab">PAI 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="ab" placeholder="" value="<?php echo $siswa['ab'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="bb">Bahasa Indonesia 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="bb" placeholder="" value="<?php echo $siswa['bb'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="cb">Bahasa Inggris 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="cb" placeholder="" value="<?php echo $siswa['cb'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="zb">Matematika 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="zb" placeholder="" value="<?php echo $siswa['zb'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="eb">IPA 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="eb" placeholder="" value="<?php echo $siswa['eb'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="fb">IPS 7 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="fb" placeholder="" value="<?php echo $siswa['fb'] ?>" /></td>
				</tr>


				<tr>

					<tr>
					<td width="200" valign="center"><label for="xa">PAI 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xa" placeholder="" value="<?php echo $siswa['xa'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="xb">Bahasa Indonesia 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xb" placeholder="" value="<?php echo $siswa['xb'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="xc">Bahasa Inggris 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xc" placeholder="" value="<?php echo $siswa['xc'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="xd">Matematika 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xd" placeholder="" value="<?php echo $siswa['xd'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="xe">IPA 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xe" placeholder="" value="<?php echo $siswa['xe'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="xf">IPS 8 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="xf" placeholder="" value="<?php echo $siswa['xf'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="az">PAI 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="az" placeholder="" value="<?php echo $siswa['az'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="bz">Bahasa Indonesia 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="bz" placeholder="" value="<?php echo $siswa['bz'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="cz">Bahasa Inggris 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="cz" placeholder="" value="<?php echo $siswa['cz'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="dz">Matematika 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="dz" placeholder="" value="<?php echo $siswa['dz'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="ez">IPA 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="ez" placeholder="" value="<?php echo $siswa['ez'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="fz">IPS 8 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="fz" placeholder="" value="<?php echo $siswa['fz'] ?>" /></td>
				</tr>


				<tr>

					<tr>
					<td width="200" valign="center"><label for="r">PAI 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="r" placeholder="" value="<?php echo $siswa['r'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="o">Bahasa Indonesia 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="o" placeholder="" value="<?php echo $siswa['o'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="i">Bahasa Inggris 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="i" placeholder="" value="<?php echo $siswa['i'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="h">Matematika 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="h" placeholder="" value="<?php echo $siswa['h'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="a">IPA 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="a" placeholder="" value="<?php echo $siswa['a'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="n">IPS 9 S1</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="n" placeholder="" value="<?php echo $siswa['n'] ?>" /></td>
				</tr>
				<tr>
					<tr>
					<td width="200" valign="center"><label for="v">PAI 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="v" placeholder="" value="<?php echo $siswa['v'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="w">Bahasa Indonesia 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="w" placeholder="" value="<?php echo $siswa['w'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="x">Bahasa Inggris 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="x" placeholder="" value="<?php echo $siswa['x'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="y">Matematika 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="y" placeholder="" value="<?php echo $siswa['y'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="z">IPA 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="z" placeholder="" value="<?php echo $siswa['z'] ?>" /></td>
				</tr>
				<tr>

					<tr>
					<td width="200" valign="center"><label for="zz">IPS 9 S2</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="9" type="text" name="zz" placeholder="" value="<?php echo $siswa['zz'] ?>" /></td>
				</tr>









				<tr>
					<td width="200" valign="top"></label></td>
					<td valign="top"></td>
					<td valign="top"><input styx="margin-top:10px; height:25px; width:120px" height="200" type="submit" type="submit" value="Ubah" name="simpan" /></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br><br><br>
	<a href="index.php">Menu</a>&nbsp;|&nbsp;<a href="list-database.php">Lihat Data</a>

	&nbsp;
	</center>
	</body>
</html>