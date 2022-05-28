<?php 

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";
require_once "index.php";

$id = $_GET['id'];
$saksi = new Transaksi();

$row = $saksi->edit($id);
?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Transaksi
                </div>
                <div class="box-body">
                    <form action="saksi_proses.php" method="post">
                        <input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>" class="input-control" required>
                            <div class="form-group">
                                <tr>
                                    <td>NOVEL</td>
                                    <td><input type="text" name="id_novel" value="<?php echo $row['id_novel']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>PEMBELI</td>
                                    <td><input type="text" name="id_pembeli" value="<?php echo $row['id_pembeli']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>TANGGAL</td>
                                    <td><input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>KETERANGAN</td>
                                    <td><input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                                </tr>
                    </form>
                </div>
            </div>
        </div>
</div>