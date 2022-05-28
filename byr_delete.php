<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembayaran.php";


$id = $_GET['id'];

$byr = new Pembayaran();
$rows = $byr->delete($id);

?>

Data berhasil dihapus!

<a href="byr_tampil.php">Kembali</a>