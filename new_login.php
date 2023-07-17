<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>new login hotel</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>silahkan isi user login</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
        <input type="text" class="form-control mb-3" name="nama" placeholder="nama" required="required">

                    </div>
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" class="form-control mb-3" name="username" placeholder="username"required="required">
                    </div>

                            <label>password</label>
                            <input class="form-control" name="password" placeholder="password" required="required"></input>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>