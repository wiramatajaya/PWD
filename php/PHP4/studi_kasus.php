<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Event</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; padding: 20px; }
        .container { max-width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .error { color: #d9534f; background: #f2dede; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .success-box { margin-top: 20px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; }
        .success-header { background: #5cb85c; color: white; padding: 10px; text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 10px; border-bottom: 1px solid #eee; }
        td:first-child { font-weight: bold; width: 30%; }
        input, select { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
        button { background: #0275d8; color: white; border: none; padding: 10px 15px; cursor: pointer; width: 100%; border-radius: 4px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Pendaftaran Event</h2>
    
    <?php
    // Inisialisasi variabel
    $errors = [];
    $show_result = false;

    // Cek apakah form sudah disubmit melalui POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitasi input menggunakan htmlspecialchars untuk keamanan (XSS Protection)
        $nama  = htmlspecialchars($_POST['nama']);
        $nim   = htmlspecialchars($_POST['nim']);
        $kelas = htmlspecialchars($_POST['kelas']);

        // Validasi sederhana (cek kosong)
        if (empty($nama)) $errors[] = "Nama tidak boleh kosong.";
        if (empty($nim)) $errors[] = "NIM tidak boleh kosong.";
        if (empty($kelas)) $errors[] = "Kelas tidak boleh dipilih.";

        // Jika tidak ada error, tampilkan hasil
        if (empty($errors)) {
            $show_result = true;
        }
    }
    ?>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>




</div>

</body>
</html>