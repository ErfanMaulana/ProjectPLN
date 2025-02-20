<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
    body {
        background-color: #e0e0e0; /* Ganti warna latar belakang menjadi abu-abu */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .login-container {
        background-color: #ffffff; /* Latar belakang form tetap putih */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .form-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #6c757d; /* Ganti warna judul menjadi abu-abu */
        margin-bottom: 1rem;
    }
    .form-group label {
        font-weight: bold;
        color: #6c757d; /* Ganti warna label menjadi abu-abu */
    }
    .btn-primary {
        width: 100%;
        background-color: #6c757d; /* Ganti warna tombol menjadi abu-abu */
        border: none;
    }
    .btn-primary:hover {
        background-color: #5a6268; /* Ganti warna hover tombol menjadi sedikit lebih gelap */
    }
    .register-link {
        text-align: center;
        margin-top: 15px;
        color: #6c757d; /* Warna teks link daftar menjadi abu-abu */
    }
    .register-link a {
        color: #007bff; /* Link registrasi tetap berwarna biru */
    }
    .register-link a:hover {
        color: #0056b3; /* Link registrasi hover menjadi biru gelap */
    }
 </style>
</head>
<body>
 <div class="login-container col-md-4">
    <h3 class="text-center form-title">Login</h3>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
    <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>


    <div class="register-link">
        <p>Belum punya akun? <a href="{{route ('register')}}">Register</a></p>
    </div>
 </div>

 <!-- Tambahkan script Font Awesome untuk ikon -->
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
