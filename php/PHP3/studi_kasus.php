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
        <h2>Daftar Mahasiswa (Multidimensional Array)</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Membuat array multidimensi berisi 5 data mahasiswa
                $daftar_mhs = [
                    ["nama" => "Wiramatajaya", "nim" => "2310651001", "prodi" => "Informatika"],
                    ["nama" => "Budi Santoso", "nim" => "2310651002", "prodi" => "Informatika"],
                    ["nama" => "Siti Aminah", "nim" => "2310651003", "prodi" => "Sistem Informasi"],
                    ["nama" => "Andi Wijaya", "nim" => "2310651004", "prodi" => "Teknik Sipil"],
                    ["nama" => "Rina Putri", "nim" => "2310651005", "prodi" => "Informatika"]
                ];

                $no = 1;
                foreach ($daftar_mhs as $mhs) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $mhs['nama'] . "</td>";
                    echo "<td>" . $mhs['nim'] . "</td>";
                    echo "<td>" . $mhs['prodi'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

</body>
</html>