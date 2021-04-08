<?php 
    include '../proses/prosesApotek.php';
    $id_farmasi = $_GET['id_farmasi'];

    if (deleteFarmasi($id_farmasi) == true) {
        header('location:../admin.php');
    }else{
        echo 'Gagal Delete';
    }
    
?>