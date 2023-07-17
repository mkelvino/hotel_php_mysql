<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>new hotel</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>silahkan isi hotel</h3>
  
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label>hotel</label>
                        <input type="text" class="form-control mb-3" name="id_hotel" placeholder="no" required="required">

                    </div>
                    <div class="form-group">
                        <label>harga</label>
                        <input type="text" class="form-control mb-3" name="harga" placeholder="harga"required="required">
                    </div>
                    <label for="status">status kamar</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="status" value="kosong"> kosong
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="status" value="penuh"> penuh
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="baru" value="baru" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>