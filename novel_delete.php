<?php 

require_once "inc/Koneksi.php";
require_once "app/Novel.php";


$id = $_GET['id'];

$novel = new Novel();
$rows = $novel->delete($id);

?>

Data berhasil dihapus!

<a href="novel_tampil.php">Kembali</a>