<?php 

require_once "inc/Koneksi.php";
require_once "app/Supplier.php";


$id = $_GET['id'];

$supp = new Supplier();
$rows = $supp->delete($id);

?>

Data berhasil dihapus!

<a href="supp_tampil.php">Kembali</a>