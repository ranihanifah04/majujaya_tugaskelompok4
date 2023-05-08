<?php
    $BASE_URL = realpath(dirname(__DIR__).'\..');
	include($BASE_URL.'/connect.php');
	include($BASE_URL.'/class/Penjualan.php');
    
    if(isset($_POST['add']));
    {
        $penjualan = new Penjualan($conn);
        // $penjualan->setIdPenjualan($_POST['IdPenjualan']);
        $penjualan->setJumlahPenjualan($_POST['jumlah_penjualan']);
        $penjualan->setHargaJual($_POST['harga_jual']);
        $penjualan->setIdPengguna($_POST['id_pengguna']);
        $penjualan->setIdBarang($_POST['id_barang']);
        
        try {
            $penjualan->addPenjualan();
            header ("location:/maju_jaya/view/penjualan/index.php");
        } catch (Exception $e) {
            echo "<p>Error: </p>";
            echo $e;
            // header ("Refresh: 3; URL=/maju_jaya/view/penjualan/index.php");
        }
    }
?>