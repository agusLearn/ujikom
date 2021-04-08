<?php 
    
    
    include '../proses/prosesApotek.php';
    $id_obat = $_GET['id_obat'];

    if (deleteObat($id_obat) == true) {
        header('location:../admin.php');
    }else{
        echo 'Gagal Delete';
    }

?>