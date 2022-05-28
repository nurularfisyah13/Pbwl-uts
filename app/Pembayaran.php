<?php 

class Pembayaran extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pembayaran";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $tgl_bayar = $_POST['tgl_bayar'];
        $total_bayar = $_POST['total_bayar'];
        $id_transaksi = $_POST['id_transaksi'];

        $sql = "INSERT INTO tb_pembayaran (tgl_bayar, total_bayar, id_transaksi) VALUES (:tgl_bayar, :total_bayar, :id_transaksi)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tgl_bayar", $tgl_bayar);
        $stmt->bindParam(":total_bayar", $total_bayar);
        $stmt->bindParam(":id_transaksi", $id_transaksi);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_pembayaran WHERE id_pembayaran=:id_pembayaran";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembayaran", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $tgl_bayar = $_POST['tgl_bayar'];
        $total_bayar = $_POST['total_bayar'];
        $id_transaksi = $_POST['id_transaksi'];
        $id_pembayaran = $_POST['id_pembayaran'];

        $sql = "UPDATE tb_novel SET tgl_bayar=:tgl_bayar, total_bayar=:total_bayar, id_transaksi=:id_transaksi WHERE id_pembayaran=:id_pembayaran";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tgl_bayar", $tgl_bayar);
        $stmt->bindParam(":total_bayar", $total_bayar);
        $stmt->bindParam(":id_transaksi", $id_transaksi);
        $stmt->bindParam(":id_pembayaran", $id_pembayaran);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_pembayaran WHERE id_pembayaran=:id_pembayaran";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembayaran", $id);
        $stmt->execute();

    }

}

