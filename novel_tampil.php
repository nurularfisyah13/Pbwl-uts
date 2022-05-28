<?php 

require_once "inc/Koneksi.php";
require_once "app/Novel.php";
require_once "index.php";

$novel = new Novel();
$rows = $novel->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    NOVEL
                </div>
                <div class="box-body">
                    <a href="novel_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah Data</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID NOVEL</th>
                                <th>NOVEL</th>
                                <th>PENULIS</th>
                                <th>HARGA</th>
                                <th>STOK</th>
                                <th>ID_SUPPLIER</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_novel']; ?></td>
                            <td><?php echo $row['nama_novel']; ?></td>
                            <td><?php echo $row['penulis']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><?php echo $row['stok']; ?></td>
                            <td><?php echo $row['id_supplier']; ?></td>
                            <td>
                                <a href="novel_edit.php?id=<?php echo $row['id_novel']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i>Edit</a> |
                                <a href="novel_delete.php?id=<?php echo $row['id_novel']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i>Delete</a>
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