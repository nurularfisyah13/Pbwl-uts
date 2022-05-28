<?php 

require_once "inc/Koneksi.php";
require_once "app/Pembayaran.php";
require_once "index.php";

$byr = new Pembayaran();
$rows = $byr->tampil();

?>

<!-- content -->
<div class="content-tampil">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    PEMBAYARAN
                </div>
                <div class="box-body">
                    <a href="byr_input.php" class="text-green"><i class="fas fa-plus"></i>Tambah Data</a>

                    <form action="">
                        <div class="input-group">
                            <input type="text" name="key" placeholder="Pencarian">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID PEMBAYARAN</th>
                                <th>TANGGAL BAYAR</th>
                                <th>TOTAL BAYAR</th>
                                <th>ID TRANSAKSI</th>
                                <th>AKSI</th>
                            </tr>   
                        </thead>

                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_pembayaran']; ?></td>
                            <td><?php echo $row['tgl_bayar']; ?></td>
                            <td><?php echo $row['total_bayar']; ?></td>
                            <td><?php echo $row['id_transaksi']; ?></td>
                            <td>
                                <a href="byr_edit.php?id=<?php echo $row['id_pembayaran']; ?>" title="Edit Data" class="text-orange"><i class="fas fa-edit"></i>Edit</a> |
                                <a href="byr_delete.php?id=<?php echo $row['id_pembayaran']; ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fas fa-times"></i>Delete</a>
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


