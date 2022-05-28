<?php 

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";
require_once "index.php";

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tambah Transaksi
                </div>
                <div class="box-body">
                    <form action="saksi_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                                <td>NOVEL</td>
                                <td><input type="text" name="id_novel" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>PEMBELI</td>
                                <td><input type="text" name="id_pembeli" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>TANGGAL</td>
                                <td><input type="text" name="tanggal" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>KETERANGAN</td>
                                <td><input type="text" name="keterangan" class="input-control" required></td>
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

