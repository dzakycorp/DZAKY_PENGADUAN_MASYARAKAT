<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>BUAT AKUN</title>
</head>
<body>
    <div class="container">
        <form action="proses_register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">BUAT AKUN</p>
            <div class="input-group">
                <input type="text" placeholder="Nik" name="nik" required class="form-control" id="floatingInput">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" required class="form-control" id="floatingInput">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required class="form-control" id="floatingInput">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Telp" name="telp" required class="form-control" id="floatingInput">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text" align="center"><a href="login.php">Kembali</a></p>
            <!-- <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p> -->
        </form>
    </div>
</body>
</html>