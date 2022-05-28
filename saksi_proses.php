<?php 

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";

$saksi = new Transaksi();

if (isset($_POST['btn_simpan'])) {
    $saksi->simpan();
    header("location:saksi_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $saksi->update();
    header("location:saksi_tampil.php");
}

?>