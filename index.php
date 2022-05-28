<?php  
session_start();
require_once "inc/Koneksi.php";
    if(empty($_SESSION["username"])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Novel Store</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: '#keterangan'
        });
    </script>
</head>
<body class="bg-light">
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <!-- navbar menu -->
            <ul class="nav-menu float-left">
            <img class="icon" src="layouts/assets/img/logo.png">
                <li><a href="header.php">Home</a></li>
                <li><a href="novel_tampil.php">Novel</a></li>
                <li><a href="saksi_tampil.php">Transaksi</a></li>
                <li><a href="byr_tampil.php">Pembayaran</a></li>
                <li><a href="supp_tampil.php">Supplier</a></li>
                <li><a href="beli_tampil.php">Pembeli</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>