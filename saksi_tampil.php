<?php 

require_once "inc/Koneksi.php";
require_once "app/Transaksi.php";
require_once "index.php";

$saksi = new Transaksi();
$rows = $saksi->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    TRANSAKSI
                </div>
                <div class="box-body">
                    <a href="saksi_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah Data</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID TRANSAKSI</th>
                                <th>ID NOVEL</th>
                                <th>ID PEMBELI</th>
                                <th>TANGGAL</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_transaksi']; ?></td>
                            <td><?php echo $row['id_novel']; ?></td>
                            <td><?php echo $row['id_pembeli']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td>
                                <a href="saksi_edit.php?id=<?php echo $row['id_transaksi']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i>Edit</a> |
                                <a href="saksi_delete.php?id=<?php echo $row['id_transaksi']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i>Delete</a>
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


