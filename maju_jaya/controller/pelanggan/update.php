<?php
    $BASE_URL = realpath(dirname(__DIR__).'\..');
	include($BASE_URL.'/connect.php');
	include($BASE_URL.'/class/Pelanggan.php');
    
    if(isset($_POST['update']));
    {
        $pelanggan = new Pelanggan($conn);
        $pelanggan->setIdPelanggan($_POST['id_pelanggan']);
        $pelanggan->setNamaPelanggan($_POST['nama_pelanggan']);
        $pelanggan->setAlamat($_POST['alamat_pelanggan']);
        
        try {
            $pelanggan->updatePelanggan();
            header ("location:/maju_jaya/view/pelanggan/index.php");
        } catch (Exception $e) {
            echo "<p>Error: </p>";
            echo $e;
            header ("Refresh: 3; URL=/maju_jaya/view/pelanggan/index.php");
        }
    }
?>