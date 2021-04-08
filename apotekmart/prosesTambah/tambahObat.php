<?php 
    include '../proses/prosesApotek.php';
    if (isset($_POST['tambahObat'])) 
    {
        $cekStatusInput = addObat($_POST);
        if ($cekStatusInput == true) 
        {
            header('location:../admin.php');
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data obat</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="navbar-brand">
            <a href="#">Apotek</a>
        </div>
        <div class="nav navbar-nav">
            <a class="nav-item nav-link " href="../persediaan.php">Persediaan <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="../admin.php">Admin</a>
        </div>
    </nav>

    <div class="container">
        <h3>Tambah Data Obat</h3>

        <form action="" method="POST">
            <label for="id">ID Obat</label>
            <input type="text" class="form-control"  name="id_obat" required>
            
            <label for="kt">Kategori</label>
            <input type="text" class="form-control"  name="kategori" required>

            <label for="nb">Nama Buku</label>
            <input type="text" class="form-control"  name="nama_buku" required>

            <label for="hr">Harga</label>
            <input type="number" class="form-control"  name="harga" required>

            <label for="st">Stock</label>
            <input type="number" class="form-control"  name="stok" required>

            <label for="fr">Farmasi</label>
            <input type="text" class="form-control"   name="farmasi" required>

            <button type="submit" name="tambahObat" class="btn btn-primary mt-4">Tambah Obat</button>
            <button type="reset"  class="btn btn-danger mt-4">Tambah Obat</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>