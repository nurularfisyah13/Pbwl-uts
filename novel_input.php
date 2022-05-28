<?php 

require_once "inc/Koneksi.php";
require_once "app/Novel.php";
require_once "index.php";

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Tambah Novel
                </div>
                <div class="box-body">
                    <form action="novel_proses.php" method="post">
                        <div class="form-group">
                            <tr>
                                <td>NOVEL</td>
                                <td><input type="text" name="nama_novel" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>PENULIS</td>
                                <td><input type="text" name="penulis" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>HARGA</td>
                                <td><input type="text" name="harga" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>STOK</td>
                                <td><input type="text" name="stok" class="input-control" required></td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>ID SUPPLIER</td>
                                <td><input type="text" name="id_supplier" class="input-control" required></td>
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

