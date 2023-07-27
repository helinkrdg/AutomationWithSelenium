<!DOCTYPE html>
<html>

<head>
    <title>Login Sayfası</title>
    <!-- Bootstrap 5 CSS dosyasını ekleyelim -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-3">Giriş Yap</h2>
                <form action="ana_sayfa.php" method="post">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-check pb-3">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="exampleCheck1">Beni Hatırlar</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS dosyasını ekleyelim -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>