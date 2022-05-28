<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembayaran.php";
require_once "index.php";

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tambah Pembayaran
                </div>
                <div class="box-body">
                    <form action="byr_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                                <td>TANGGAL BAYAR</td>
                                <td><input type="text" name="tgl_bayar" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>TOTAL BAYAR</td>
                                <td><input type="text" name="total_bayar" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>ID TRANSAKSI</td>
                                <td><input type="text" name="id transaksi" class="input-control" required></td>
                            </tr>
                        </div>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="btn_simpan" value="SIMPAN" class="btn btn-blue"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
</div>

