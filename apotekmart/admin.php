<?php 
    include 'proses/prosesApotek.php';

    // query untuk menampilkan semua Data Obat
    $sql = "SELECT * FROM obat";
    $dataSemuaObat = dataObat($sql);

    $sql = "SELECT * FROM farmasi";
    $dataSemuaFarmasi = dataFarmasi($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!-- Font Awesome Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="navbar-brand">
            <a href="persediaan.php">Apotek Mart</a>
        </div>
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="persediaan.php">Persediaan <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="admin.php">Admin</a>
        </div>
    </nav>


    <div class="container">
      <a href="prosesTambah/tambahObat.php" class="btn btn-primary mt-3 mb-3">Tambah Data Obat</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-">ID Obat</th>
                    <th scope="col-">Kategori</th>
                    <th scope="col-">Nama Buku</th>
                    <th scope="col-">Harga</th>
                    <th scope="col-">Stok</th>
                    <th scope="col-">Farmasi</th>
                    <th scope="col-">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataSemuaObat as $data) : ?>
                <tr>
                    <td><?= $data['id_obat'] ?></td>
                    <td><?= $data['kategori'] ?></td>
                    <td><?= $data['nama_buku'] ?></td>
                    <td><?= $data['harga'] ?></td>
                    <td><?= $data['stok'] ?></td>
                    <td><?= $data['farmasi'] ?></td>
                    <td>
                        <a href="prosesEdit/editObat.php?id_obat=<?php echo $data['id_obat'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="prosesDelete/deleteDataApotik.php?id_obat=<?php echo $data['id_obat'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <br>
        <a href="prosesTambah/tambahFarmasi.php" class="btn btn-primary mb-3">Tambah Data Farmasi</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-">ID Farmasi</th>
                    <th scope="col-">Nama</th>
                    <th scope="col-">Alamat</th>
                    <th scope="col-">Kota</th>
                    <th scope="col-">Telepon</th>
                    
                    <th scope="col-">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataSemuaFarmasi as $data) : ?>
                <tr>
                    <td><?= $data['id_farmasi'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['kota'] ?></td>
                    <td><?= $data['telepon'] ?></td>
                    <td>
                        <a href="prosesEdit/editFarmasi.php?id_farmasi=<?php echo $data['id_farmasi'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="prosesDelete/deleteDataFarmasi.php?id_farmasi=<?php echo $data['id_farmasi'] ?>"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>