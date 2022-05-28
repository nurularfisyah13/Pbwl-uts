<?php 

require_once "inc/Koneksi.php";
require_once "app/Supplier.php";
require_once "index.php";

$id = $_GET['id'];
$supp = new Supplier();

$row = $supp->edit($id);
?>

    <!-- content -->
    <div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Edit Supplier
                </div>
                <div class="box-body">
                    <form action="supp_proses.php" method="post">
                        <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
                            <div class="form-group">
                                <tr>
                                    <td>NAMA SUPPLIER</td>
                                    <td><input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>NO TELEPON</td>
                                    <td><input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>" class="input-control" required></td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <tr>
                                    <td>ALAMAT</td>
                                    <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" class="input-control" required></td>
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
