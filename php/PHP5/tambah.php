<?php
session_start();
if (isset($_POST['simpan'])) {
    $data_baru = [
        'nama' => $_POST['nama'],
        'matkul' => $_POST['matkul']
    ];
    array_push($_SESSION['mhs_tasks'], $data_baru);
    header("Location: index.php"); // Kembali ke halaman utama
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
</head>
<body>
    <h2>Tambah Tugas Baru</h2>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Mahasiswa" required><br><br>
        <input type="text" name="matkul" placeholder="Mata Kuliah" required><br><br>
        <button type="submit" name="simpan">Simpan Tugas</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
