<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembayaran.php";

$byr = new Pembayaran();

if (isset($_POST['btn_simpan'])) {
    $byr->simpan();
    header("location:byr_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $byr->update();
    header("location:byr_tampil.php");
}

?>