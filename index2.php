<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Sistem Pembayaran SPP</title>
    <!-- Memanggil bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5"> <!-- tinggi rendah logo -->
        <div class="row justify-content-md-center">
            <div class="col-md-2"> <!-- ukuran frame logo -->
                <h4 class="text-center">Login Admin</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="logo.png" width="100%">
                    </div>
                    <!-- form login -->
                    <div class="card-body"></div>
                    <form action="proses-login-petugas.php" method="post">
                        <div class="form-group mb-2">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan username anda" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required>
                        </div>
                        <!-- tombol login -->
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                        <a href="index.php"> Login Sebagai Siswa </a>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Memanggil J Query -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>