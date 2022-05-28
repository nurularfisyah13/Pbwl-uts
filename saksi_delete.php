<?php 

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";


$id = $_GET['id'];

$saksi = new Transaksi();
$rows = $saksi->delete($id);

?>

Data berhasil dihapus!

<a href="saksi_tampil.php">Kembali</a>