<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px; background-color: #f0f2f5; }
        section { background: white; padding: 20px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); max-width: 600px; }
        h2 { color: #2d3436; border-bottom: 2px solid #dfe6e9; padding-bottom: 8px; }
        .status { font-weight: bold; padding: 5px 10px; border-radius: 4px; }
        .lulus { background-color: #dfe6e9; color: #27ae60; }
        .tidak-lulus { background-color: #fab1a0; color: #d63031; }
        .grade { font-size: 1.5em; color: #0984e3; }
        code { background: #eee; padding: 2px 5px; border-radius: 3px; }
    </style>
</head>
<body>
        <section>
        <h2>Tantangan: Cek Kelulusan via URL</h2>
        <p>Gunakan parameter di URL: <code>?nilai=80</code></p>
        <hr>

        <?php
            // Mengambil input nilai dari URL menggunakan $_GET
            // isset() mengecek apakah parameter 'nilai' ada di URL
            if (isset($_GET['nilai'])) {
                $nilaiUrl = $_GET['nilai'];

                // Logika Grade & Status
                if ($nilaiUrl >= 80) {
                    $g = "A";
                    $s = "Lulus";
                } elseif ($nilaiUrl >= 65) {
                    $g = "B";
                    $s = "Lulus";
                } elseif ($nilaiUrl >= 50) {
                    $g = "C";
                    $s = "Lulus";
                } else {
                    $g = "E";
                    $s = "Tidak Lulus";
                }

                echo "<h3>Hasil Input URL:</h3>";
                echo "<p>Nilai: <strong>$nilaiUrl</strong></p>";
                echo "<p>Grade: <span class='grade'>$g</span></p>";
                echo "<p>Status: <strong>$s</strong></p>";
            } else {
                echo "<p style='color: orange;'>Silakan masukkan nilai pada URL untuk melihat hasil.</p>";
            }
        ?>
    </section>
</body>
</html>