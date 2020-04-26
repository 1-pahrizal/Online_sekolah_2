<?php

    include 'configuration.php';

    if( isset($_GET['id']) ){
        
        // ambil id dari query string
        $id = $_GET['id'];
        $namalengkap = $_GET['id'];

        echo '
                <title>Anda Yakin?</title>
                <body style="font-family: monospace;">
                <center>
                <br><br><br><br><br><br><br><br><br><br><br>
                <fieldset style="width: 200px; padding: 40px; border:2px solid blue; box-shadow:0 0 10px #6F00FF;">';

		$sql = 'SELECT nama, nama_p, jenis_kelamin, agama, ttl FROM tbl_data_siswa WHERE id = '.$id.';';
        $query = mysqli_query($db, $sql);
        
        while($siswa = mysqli_fetch_array($query)){
                '</u><br><br> Apakah anda ingin menghapus data ini? <br><br>';
        }
        ?>

        <form action="proses-edit-data.php" method="POST">    
            <a href='proses-hapus-data.php?id=<?php echo $id ?>'>Hapus Data</a> | <a href='list-database.php'>Kembali</a> 

        </form>

        <?php
        
    } else {
        die("akses dilarang...");
    }
    ?>
    <br><br>  
    </fieldset>
    </center>
    </body>
    <?php
?>