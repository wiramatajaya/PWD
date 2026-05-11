<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3 - Perulangan & Array</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding: 20px; background-color: #f8f9fa; }
        section { background: white; padding: 20px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #3498db; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .assoc-box { background: #e8f4fd; padding: 15px; border-radius: 5px; border-left: 5px solid #3498db; }
    </style>
</head>
<body>

    <section>
        <h2>Tugas Eksplorasi</h2>
        
        <h4>Daftar Mata Kuliah (Indexed Array):</h4>
        <ul>
            <?php
            $matkul = ["Pemrograman Web", "Struktur Data", "Basis Data", "Sistem Operasi", "Jaringan Komputer"];
            foreach ($matkul as $m) {
                echo "<li>$m</li>";
            }
            ?>
        </ul>

        <hr>

        <h4>Detail Mahasiswa (Associative Array):</h4>
        <div class="assoc-box">
            <?php
            $mhs_detail = [
                "Nama"  => "Wiramatajaya",
                "NIM"   => "2310651000",
                "Kelas" => "Informatika A",
                "Prodi" => "Informatika"
            ];

            foreach ($mhs_detail as $key => $value) {
                echo "<strong>$key:</strong> $value <br>";
            }
            ?>
        </div>
    </section>


</body>
</html>