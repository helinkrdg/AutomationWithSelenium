<!DOCTYPE html>
<html>

<head>
    <title>Ana Sayfa</title>
    <!-- Bootstrap 5 CSS dosyasını ekleyelim -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                // Formdan gelen kullanıcı adı ve şifre bilgilerini alın
                $user_name = $_POST['user_name'];
                $password = $_POST['password'];
                // Kullanıcı adı ve şifre bilgilerini kontrol edin (örnek olarak sadece "admin" ve "12345" kabul edilecektir)
                if ($user_name === 'helin' && $password === '12345') 
                {
                    echo '<h4>Giriş başarılı! Hoş geldiniz, ' . $user_name. '</h4>';
                    echo '<ul class="pt-3">';
                    echo '<li class="bg-light mb-2 p-2 rounded border"><a href="yorumlar.php"><i class="bi bi-chat-square-dots"></i> Yorumları Oku</a></li>';
                    echo '<li class="bg-light mb-2 p-2 rounded border"><a href="yorum_yaz.php"><i class="bi bi-pencil"></i> Yorum Yaz</a></li>';
                    echo '<ul>';
                } else {
                    echo "<h4 class='text-danger'>Hata !</h4>";
                    echo 'Giriş başarısız! Lütfen geçerli kullanıcı adı ve şifre girin.';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS dosyasını ekleyelim -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        a {
            text-decoration: none;
            font-size: 1.2rem;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 5px;
        }
    </style>
</body>

</html>