<!DOCTYPE html>
<html>

<head>
    <title>Yorum Yaz Sayfası</title>
    <!-- Bootstrap 5 CSS dosyasını ekleyelim -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Yorum Yapın</h3>
                <?php
                if (isset($_POST['submit'])) {
                    $yorum = $_POST['yorum'];
                    if (!empty($yorum)) {
                        $dosya = 'yorum.txt';
                        $dosya_ac = fopen($dosya, 'a'); // 'a' modu dosyayı açar ve içeriği korur
                        fwrite($dosya_ac, $yorum . "\n"); // Yorumu dosyaya yaz ve yeni satıra geç
                        fclose($dosya_ac);
                        echo '<div class="container mt-3 alert alert-success">Yorum başarıyla kaydedildi.</div>';
                    } else {
                        echo '<div class="container mt-3 alert alert-danger">Lütfen bir yorum girin.</div>';
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <textarea class="form-control" name="yorum" cols="3" rows="5" placeholder="Yorumunuzu buraya girin..."></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Yorumu Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>