<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> manager</title>

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="pelanggan.css">
</head>

<body class="background">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <p class="navbar-brand" href="#">hotel</p>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel hotel</h3>
            </div>
            <a href="new_hotel.php" class="btn btn-primary btn-sm">tambah hotel</a>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                    <th>id</th>
                        <th>hotel</th>
                        <th>harga</th>
                        <th>status</th>
                        <th>edit</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM hotel");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['id_hotel']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['status']; ?></td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_hotel']; ?>">
                                    Hapus
                                </button>
                                <a href="edithotel.php?edit=<?= $row['id_hotel']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>


                            <div class="modal fade" id="hapusModal<?= $row['id_hotel']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="koneksi.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
      </div>
     </div>
    </div>
   </div>
                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>