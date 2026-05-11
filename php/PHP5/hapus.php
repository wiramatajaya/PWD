<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Menghapus data berdasarkan index array
    unset($_SESSION['mhs_tasks'][$id]);
    // Reset index array agar tetap urut
    $_SESSION['mhs_tasks'] = array_values($_SESSION['mhs_tasks']);
}
header("Location: index.php");
exit;
