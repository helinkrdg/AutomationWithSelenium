<!DOCTYPE html>
<html>

<head>
    <title>Yorumlar</title>
    <!-- Bootstrap 5 CSS dosyasını ekleyelim -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3>Yorumlar</h3>
                <?php
                $dosya = 'yorum.txt';
                if (file_exists($dosya)) {
                    $yorumlar = file($dosya, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    if (!empty($yorumlar)) {
                        foreach ($yorumlar as $yorum) {
                            echo '<div class="yorum bg-light mb-2 p-2 rounded border">' . htmlspecialchars($yorum) . '</div>';
                        }
                    } else {
                        echo '<div class="alert alert-info">Henüz yorum yok.</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">Yorum dosyası bulunamadı.</div>';
                }
                ?>
            </div>
        </div>
</body>

</html>