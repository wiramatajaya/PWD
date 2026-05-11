<?php
session_start();
if (!isset($_SESSION['mhs_tasks'])) {
    $_SESSION['mhs_tasks'] = [];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Manajemen Tugas Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Tugas Mahasiswa</h1>
    <a href="tambah.php">[+] Tambah Tugas Baru</a>
    <br><br>
    <table border="1" width="100%" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($_SESSION['mhs_tasks'])) : ?>
                <tr><td colspan="4" align="center">Belum ada tugas.</td></tr>
            <?php else : ?>
                <?php foreach ($_SESSION['mhs_tasks'] as $id => $task) : ?>
                <tr>
                    <td><?= $id + 1; ?></td>
                    <td><?= $task['nama']; ?></td>
                    <td><?= $task['matkul']; ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $id; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
