<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP - Profil Mahasiswa</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding: 30px; background-color: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 500px; margin: auto; }
        h1 { color: #333; border-bottom: 2px solid #74b9ff; padding-bottom: 10px; }
        .info { margin-top: 15px; line-height: 1.8; }
        .label { font-weight: bold; color: #555; }
        .php-tag { color: #d63031; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
 
        
        <div class="info">
            <p>
                <span class="label">Nama:</span> <?php echo "Muhammad Maulana Wiramatajaya"; ?><br>
                <span class="label">NIM:</span> <?php echo "2310651000"; ?><br>
                <span class="label">Kelas:</span> <?php echo "Informatika - Semester 4"; ?>
            </p>
        </div>

        <hr>

        <?php
            // Mendefinisikan identitas menggunakan variabel
            $namaLengkap = "Wiramatajaya";
            $nimMahasiswa = "2310651000";
            $programStudi = "Informatika";
            $angkatan = "2023";
        ?>

        <h2>Profil Mahasiswa (Dari Variabel)</h2>
        <div class="info">
            <p><span class="label">Nama Lengkap:</span> <?php echo $namaLengkap; ?></p>
            <p><span class="label">NIM:</span> <?php echo $nimMahasiswa; ?></p>
            <p><span class="label">Prodi:</span> <?php echo $programStudi; ?></p>
            <p><span class="label">Angkatan:</span> <?php echo $angkatan; ?></p>
        </div>

        <p style="font-size: 0.8em; color: #888; margin-top: 20px;">
            Halaman ini diproses secara <span class="php-tag">Server-Side</span>.
        </p>
    </div>

</body>
</html>