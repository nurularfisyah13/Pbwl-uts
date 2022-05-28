<?php 

require_once "inc/Koneksi.php";
require_once "app/Supplier.php";
require_once "index.php";

$supp = new Supplier();
$rows = $supp->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    SUPPLIER
                </div>
                <div class="box-body">
                    <a href="supp_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah Data</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID SUPPLIER</th>
                                <th>NAMA</th>
                                <th>NO TELEPON</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_supplier']; ?></td>
                            <td><?php echo $row['nama_supplier']; ?></td>
                            <td><?php echo $row['no_telp']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td>
                                <a href="supp_edit.php?id=<?php echo $row['id_supplier']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i>Edit</a> |
                                <a href="supp_delete.php?id=<?php echo $row['id_supplier']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</div>    

<!-- footer -->
<div class="footer">
    <p>Copyright &copy; TREE NOVEL STORE All Rights reserved 2021</p>
</div>


