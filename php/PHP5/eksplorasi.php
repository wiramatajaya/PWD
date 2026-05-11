<?php
// 1. Buat daftar data menggunakan array
$daftar_tugas = ["Belajar PHP Dasar", "Mengerjakan Tugas PSD", "Instalasi VS Code"];

// Logic untuk menangkap hasil form (Create)
$pesan = "";
if (isset($_POST['submit'])) {
    $tugas_baru = $_POST['tugas'];
    $pesan = "Tugas baru ditambahkan: <strong>$tugas_baru</strong>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eksplorasi PHP</title>
</head>
<body>
    <h3>Daftar Tugas (Tampilan Tabel)</h3>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Tugas</th>
        </tr>
        <?php foreach ($daftar_tugas as $index => $tugas) : ?>
        <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $tugas; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Form Tambah Data</h3>
    <form method="POST">
        <input type="text" name="tugas" placeholder="Masukkan tugas baru" required>
        <button type="submit" name="submit">Tambah</button>
    </form>

    <p><?= $pesan; ?></p>
</body>
</html>
