<?php 
    include '../proses/prosesApotek.php';

    $id_obat = $_GET['id_obat'];

    $dataX = editStockObat($id_obat);
    $dataObat = $dataX->fetch_assoc();


    if (isset($_POST['ubahStock'])) 
    {
        if (updateStockObat($_POST) == true) 
        {
            header('location: ../persediaan.php');
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Edit Stok Obat</title>

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
            <a class="nav-item nav-link active" href="../persediaan.php">Persediaan <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="../admin.php">Admin</a>
        </div>
    </nav>

    <div class="container">
        <h3>Edit Stock Obat</h3>

        <form action="" method="POST">
            <label for="id">ID Obat</label>
            <input type="text" class="form-control"  name="id_obat" value="<?php echo $dataObat['id_obat'] ?>" readonly>
            
            <label for="kt">Kategori</label>
            <input type="text" class="form-control"  name="kategori"  value="<?php echo $dataObat['kategori'] ?>" readonly>

            <label for="nb">Nama Buku</label>
            <input type="text" class="form-control"  name="nama_buku" value="<?php echo $dataObat['nama_buku'] ?>" readonly>

            <label for="hr">Harga</label>
            <input type="number" class="form-control"  name="harga" value="<?php echo $dataObat['harga'] ?>" readonly>

            <label for="st">Stock</label>
            <input type="number" class="form-control"  name="stok" value="<?php echo $dataObat['stok'] ?>">

            <label for="fr">Farmasi</label>
            <input type="text" class="form-control"   name="farmasi" value="<?php echo $dataObat['farmasi'] ?>" readonly>

            <button type="submit" name="ubahStock" class="btn btn-primary mt-4">Ubah Stock</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>