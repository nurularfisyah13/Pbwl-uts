<?php 

require_once "inc/Koneksi.php";
require_once "app/Novel.php";
require_once "index.php";

$id = $_GET['id'];
$novel = new Novel();

$row = $novel->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Novel
                </div>
                <div class="box-body">
                    <form action="novel_proses.php" method="post">
                        <input type="hidden" name="id_novel" value="<?php echo $row['id_novel']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>NOVEL</td>
                                    <td><input type="text" name="nama_novel" value="<?php echo $row['nama_novel']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>PENULIS</td>
                                    <td><input type="text" name="penulis" value="<?php echo $row['penulis']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>HARGA</td>
                                    <td><input type="text" name="harga" value="<?php echo $row['harga']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>STOK</td>
                                    <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>ID SUPPLIER</td>
                                    <td><input type="text" name="id_supplier" value="<?php echo $row['id_supplier']; ?>" class="input-control" required></td>
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
