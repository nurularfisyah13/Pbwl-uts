<?php 

require_once "inc/Koneksi.php";
require_once "app/Supplier.php";

$supp = new Supplier();

if (isset($_POST['btn_simpan'])) {
    $supp->simpan();
    header("location:supp_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $supp->update();
    header("location:supp_tampil.php");
}

?>