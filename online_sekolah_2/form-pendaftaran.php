<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Siswa</title>
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

<body style="font-family: serif;">
	<br><br><br>
	<center>
		<font size="16"><b> Form Siswa baru cok</font></b><br>
		<td><a href="index.php">Menu</a>&nbsp;|&nbsp;<a href="list-database.php">Lihat Data</a></td>
	</center>
	<center>
	<br><br>
	<fieldset style="width: 600px; height: auto; padding: 20px; border:2px solid lightblue; box-shadow:0 0 10px #lightblue;">
	<form action="proses-pendaftaran.php" method="POST">
		<table border=0>
		
			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>I.CalonMurid<td>
			</tr>
			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="nama">Nama Lengkap</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nama" placeholder="Nama Lengkap" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="nama_p">Nama Panggilan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nama_p" placeholder="Nama Panggilan" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
				<td valign="top">:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label><br>
					<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td width="200" valign="center"><label for="agama">Agama</label></td>
				<td valign="center">:</td>
				<td valign="center">
					<select name="agama">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Atheis</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ttl">Tempat, Tanggal Lahir </label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ttl" placeholder="Masukan Tempat, Tanggal Lahir Anda" /></td>
			</tr>
			<tr>

			<tr>
				<td width="200" valign="top"><label for="cita">Cita-Cita</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="cita" placeholder="Masukan cita-cita Anda" /></td>
			</tr>
			<tr>
			
			<tr>
				<td width="200" valign="top"><label for="hobi">Hoby</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="hobi" placeholder="Masukan hoby Anda" /></td>
			</tr>
			<tr>

			<tr>
				<td width="200" valign="top"><label for="anak">Anak-ke</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="anak" placeholder="Berapa?" /></td>
			</tr>
			
			<tr>
				<td width="200" valign="top"><label for="saudara">Jumlah Saudara</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="saudara" placeholder="Masukan Jumlah Saudara" /></td>
			</tr>

			<tr>
				<td width="200" valign="top"><label for="berat">Berat Badan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="berat" placeholder="Masukan Berat Badan"/></td>
			</tr>

			<tr>
				<td width="200" valign="top"><label for="tinggi">Tinggi Badan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="tinggi" placeholder="Masukan Tinggi Badan"/></td>
			</tr>

			<tr>
				<td width="200" valign="top"><label for="darah">Golongan Darah</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="darah" placeholder="Masukan Golongan Darah" /></td>
			</tr>
			

			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>II.TempatTinggal<td>
			</tr>
			<tr>
				<td>========================</td>
			</tr>
				<td width="200" valign="top"><label for="alamat">Alamat</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="alamat" placeholder="Masukan Alamat Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="kelurahan">Kelurahan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="kelurahan" placeholder="Masukan Kelurahan Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="kecamatan">Kecamatan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="kecamatan" placeholder="Masukan Kecamatan Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="kot">kota/Kab</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="kot" placeholder="Masukan Kota/Kabupaten Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="provinsi">Provinsi</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="provinsi" placeholder="Masukan Provinsi Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="telp">NO.Telp</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="telp" placeholder="Masukan No.Telp Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="email">Email</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="26" type="text" name="email" placeholder="Masukan Email Anda" /></td>
			</tr>
			<tr>
				<td width="200" valign="center"><label for="tinggal">Tinggal Dengan</label></td>
				<td valign="center">:</td>
				<td valign="center">
					<select name="tinggal">
						<option>Orang Tua</option>
						<option>Asrama</option>
						<option>Saudara</option>
						
					</select>
				</td>
			</tr>


			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>III.Kesehatan<td>
			</tr>
			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="kit">Penyakit yg Pernah Diderita(sebutkan/kapan)</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="kit" placeholder="Adakah?" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="lain">Kelainan Jasmani/Lainnya</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="lain" placeholder="Adakah?" /></td>
			</tr>

			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>IV.OrangTua/Wali<td>
			</tr>
			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>Ayah **</td>
			</tr>
			<tr>
				<td>-------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="na">Nama Ayah</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="na" placeholder="Masukan Nama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ta">Tempat, Tanggal Lahir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ta" placeholder="Masukan TTL" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="pa">Pekerjaan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="pa" placeholder="Masukan Pekerjaan" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="pta">Pendidikan Terakhir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="pta" placeholder="Masukan Pendidikan Terakhir" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ga">Kewarganegaraan/Agama</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ga" placeholder="Masukan Kewarganegaraan/Agama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="noa">NO.hp/WA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="noa" placeholder="Masukan NO wa/telp" /></td>
			</tr>

			<tr>
				<td>Ibu **</td>
			</tr>
			<tr>
				<td>-------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ni">Nama Ibu</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ni" placeholder="Masukan Nama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ti">Tempat, Tanggal Lahir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ti" placeholder="Masukan TTL" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="pi">Pekerjaan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="pi" placeholder="Masukan Pekerjaan" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="pti">Pendidikan Terakhir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="pti" placeholder="Masukan Pendidikan Terakhir" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="gi">Kewarganegaraan/Agama</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="gi" placeholder="Masukan Kewarganegaraan/Agama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="noi">NO.hp/WA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="noi" placeholder="Masukan NO wa/telp" /></td>
			</tr>

			<tr>
				<td>Wali **</td>
			</tr>
			<tr>
				<td>-------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="nw">Nama Wali</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nw" placeholder="Masukan Nama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="tw">Tempat, Tanggal Lahir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="tw" placeholder="Masukan TTL" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="pw">Pekerjaan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="pw" placeholder="Masukan Pekerjaan" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ptw">Pendidikan Terakhir</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ptw" placeholder="Masukan Pendidikan Terakhir" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="hm">Hubungan Dengan Murid</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="hm" placeholder="Hubungan?" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="gw">Kewarganegaraan/Agama</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="gw" placeholder="Masukan Kewarganegaraan/Agama" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="now">NO.hp/WA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="now" placeholder="Masukan NO wa/telp" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ew">Alamat Email</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="ew" placeholder="Masukan Email" /></td>
			</tr>


			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>V.Rapot<td>
			</tr>
			<tr>
				<td>========================</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 7 S1 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="aa">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="aa" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ba">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="ba" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ca">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="ca" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="da">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="da" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ea">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="ea" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="fa">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="fa" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 7 S2 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ab">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="ab" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="bb">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="bb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="cb">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="cb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="zb">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="zb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="eb">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="eb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="fb">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="fb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 8 S1 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xa">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xa" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xb">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xb" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xc">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xc" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xd">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xd" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xe">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xe" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="xf">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="xf" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 8 S2 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
				<td width="200" valign="top"><label for="az">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="az" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="bz">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="bz" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="cz">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="cz" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="dz">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="dz" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="ez">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="ez" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="fz">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="fz" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 9 S1 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="r">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="r" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="o">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="o" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="i">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="i" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="h">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="h" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="a">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="a" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="n">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="n" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td>Kelas 9 S2 **</td>
			</tr>
			<tr>
				<td>--------------</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="v">PAI</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="v" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="w">Bahasa Indonesia</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="w" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="x">Bahasa Inggris</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="x" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="y">Matematika</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="y" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="z">IPA</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="z" placeholder="Masukan Nilai" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="zz">IPS</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="9" type="text" name="zz" placeholder="Masukan Nilai" /></td>
			</tr>




			<tr>	
				<td></td>
				<td></td>
				<td width="200"><input style="margin-top:10px; height:25px; width:120px" height="200" type="submit" value="Save Data" name="pendaftaran" /></td>
			</tr>
		</table>
		</fieldset>
		 <footer class="navbar navbar-dark bg-dark justify-content-center">
      <p class="text-white text-center">
         Di buat oleh Teman pahrizal siap  
      </p>
    </footer>
		</center>
	</body>
</html>
