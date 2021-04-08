<?php 
    include 'database.php';

    
    // ------------------------ Menampilkan Data Table ------------------------
    function dataObat($sql){
        global $conn;
        $dataSemuaObat = $conn->query($sql);

        return $dataSemuaObat;
    }

    function dataFarmasi($sql){
        global $conn;
        $dataSemuaFarmasi = $conn->query($sql);

        return $dataSemuaFarmasi;
    }



    // --------------------- Proses Pengubahan Stock di Halaman Persediaan ----------------------
    // Edit stock untuk proses di halaman persediaan
    function editStockObat($id)
    {
        global $conn;
        $sql = "SELECT * FROM obat WHERE id_obat='$id' ";
        $dataEdit = $conn->query($sql);
        return $dataEdit;
    }

    function updateStockObat($data)
    {
        global $conn;

        var_dump($data);

        $id_obat = $data['id_obat'];
        $kategori = $data['kategori'];
        $namabuku = $data['nama_buku'];
        $harga = $data['harga'];
        $stock = $data['stok'];
        $farmasi = $data['farmasi'];

        $sql = "UPDATE obat SET  kategori='$kategori', nama_buku='$namabuku', harga='$harga', stok='$stock', farmasi='$farmasi' WHERE id_obat='$id_obat' ";

       
        return  $conn->query($sql);
    }

    // --------------------- Penutup Proses Pengubahan Stock di Halaman Persediaan ----------------------

    // -------------------------- Proses admin --------------------------

    // Tambah Obat
    function addObat($data){
        global $conn;
        $id_obat = $data['id_obat'];
        $kategori = $data['kategori'];
        $namabuku = $data['nama_buku'];
        $harga = $data['harga'];
        $stock = $data['stok'];
        $farmasi = $data['farmasi'];

        $sql = "INSERT INTO obat VALUES('$id_obat', '$kategori', '$namabuku', '$harga', '$stock', '$farmasi') ";

        return $conn->query($sql);
    }
    function addFarmasi($data){
        global $conn;
        $id_farmasi = $data['id_farmasi'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kota = $data['kota'];
        $telepon = $data['telepon'];

        $sql = "INSERT INTO farmasi VALUES('$id_farmasi', '$nama', '$alamat', '$kota', '$telepon') ";

        return $conn->query($sql);
    }

    // Edit Obat
    function editObat($id)
    {
        global $conn;
        $sql = "SELECT * FROM obat WHERE id_obat='$id' ";
        $dataEdit = $conn->query($sql);
        return $dataEdit;
    }

    function updateObat($data)
    {
        $id_obat = $data['id_obat'];
        $kategori = $data['kategori'];
        $namabuku = $data['nama_buku'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $farmasi = $data['farmasi'];

        global $conn;
        $sql = "UPDATE obat SET kategori='$kategori', nama_buku='$namabuku', harga='$harga', stok='$stok', farmasi='$farmasi' WHERE id_obat = '$id_obat' ";

        return $conn->query($sql);
    }

    function editFarmasi($id_farmasi)
    {
        global $conn;
        $sql = "SELECT * FROM farmasi WHERE id_farmasi='$id_farmasi' ";
        $dataEdit = $conn->query($sql);
        return $dataEdit;
    }

    function updateFarmasi($data)
    {
        $id_farmasi = $data['id_farmasi'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kota = $data['kota'];
        $telepon = $data['telepon'];
    
        global $conn;
        $sql = "UPDATE farmasi SET nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_farmasi = '$id_farmasi' ";

        return $conn->query($sql);
    }



    // Proses Delete Data

    function deleteObat($id){
        global $conn;

        $sql = "DELETE FROM obat WHERE id_obat='$id' ";

        
        return $conn->query($sql);
    }

    function deleteFarmasi($id_farmasi){
        global $conn;

        $sql = "DELETE FROM farmasi WHERE id_farmasi='$id_farmasi' ";

        
        return $conn->query($sql);
    }




    // Pencarian Data
    function pencarianDataObat($pencarian)
    {
        global $conn;

        $sql = "SELECT * FROM obat WHERE id_obat LIKE '%$pencarian%'
                    OR kategori LIKE '%$pencarian%'
                    OR nama_buku LIKE '%$pencarian%'
                    OR harga LIKE '%$pencarian%'
                    OR stok LIKE '%$pencarian%'
                    OR farmasi LIKE '%$pencarian%' ";

        $hasilPencarian = $conn->query($sql);

        return $hasilPencarian;
    }
