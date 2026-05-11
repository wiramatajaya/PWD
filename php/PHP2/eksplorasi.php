<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 2 - Ekplorasi</title>
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
        <h2>Tugas Eksplorasi: Logika Nilai</h2>
        <?php
            // 1. Buat variabel nilai (0-100)
            $nilaiTugas = 85; 

            // 2. Tampilkan status kelulusan
            $status = ($nilaiTugas >= 60) ? "Lulus" : "Tidak Lulus";
            $classStatus = ($nilaiTugas >= 60) ? "lulus" : "tidak-lulus";

            // 3. Buat kondisi untuk kategori nilai (A/B/C/D/E)
            if ($nilaiTugas >= 85) {
                $grade = "A";
            } elseif ($nilaiTugas >= 75) {
                $grade = "B";
            } elseif ($nilaiTugas >= 60) {
                $grade = "C";
            } elseif ($nilaiTugas >= 45) {
                $grade = "D";
            } else {
                $grade = "E";
            }
        ?>
        <p>Nilai Anda: <strong><?php echo $nilaiTugas; ?></strong></p>
        <p>Grade: <span class="grade"><?php echo $grade; ?></span></p>
        <p>Status: <span class="status <?php echo $classStatus; ?>"><?php echo $status; ?></span></p>
    </section>




</body>
</html>