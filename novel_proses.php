<?php 

require_once "inc/Koneksi.php";
require_once "app/Novel.php";

$novel = new Novel();

if (isset($_POST['btn_simpan'])) {
    $novel->simpan();
    header("location:novel_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $novel->update();
    header("location:novel_tampil.php");
}

?>