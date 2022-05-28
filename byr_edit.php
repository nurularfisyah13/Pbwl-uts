<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembayaran.php";
require_once "index.php";

$id = $_GET['id'];
$byr = new Pembayaran();

$row = $byr->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Pembayaran
                </div>
                <div class="box-body">
                    <form action="byr_proses.php" method="post">
                        <input type="hidden" name="id_pembayaran" value="<?php echo $row['id_pembayaran']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>TANGGAL BAYAR</td>
                                    <td><input type="date" name="tgl_bayar" value="<?php echo $row['tgl_bayar']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>TOTAL BAYAR</td>
                                    <td><input type="text" name="total_bayar" value="<?php echo $row['total_bayar']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>ID TRANSAKSI</td>
                                    <td><input type="text" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_update" value="UPDATE" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
    </div>
