<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data hotel</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data hotel</h3>
                <?php
                    include 'koneksi.php';
                    $panggil = $koneksi->query("SELECT * FROM hotel where id_hotel='$_GET[edit]'");
                ?>
                
                <?php
                    while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="hotel">id hotel</label>

                        <input type="text" class="form-control mb-3" name="id_hotel" value="<?= $row['id_hotel'] ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label for="harga">harga</label>

                        <input type="text" class="form-control mb-3" name="harga" value="<?= $row['harga'] ?>">

                    </div>

                    <div class="form-group">

                        <label for="status">status kamar</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="status" value="kosong" <?php if (($row['status']) === "kosong") {
                                echo "checked";
                            } ?>> kosong
                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="status" value="penuh" <?php if (($row['status']) === "penuh") {

                            echo "checked";
                            } ?>> penuh
                        </div>
                        <div class="form-group mt-3">

                            <input type="submit" name="edit" value="edit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>