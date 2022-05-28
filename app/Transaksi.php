<?php 

class Transaksi extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_transaksi";
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
        $id_novel = $_POST['id_novel'];
        $id_pembeli = $_POST['id_pembeli'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO tb_transaksi (id_novel, id_pembeli, tanggal, keterangan) VALUES (:id_novel, :id_pembeli, :tanggal, :keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_novel", $id_novel);
        $stmt->bindParam(":id_pembeli", $id_pembeli);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":keterangan", $keterangan);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_transaksi WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_transaksi", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_novel = $_POST['id_novel'];
        $id_pembeli = $_POST['id_pembeli'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];
        $id_transaksi = $_POST['id_transaksi'];

        $sql = "UPDATE tb_transaksi SET id_novel=:id_novel, id_pembeli=:id_pembeli, tanggal=:tanggal, keterangan=:keterangan WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_novel", $id_novel);
        $stmt->bindParam(":id_pembeli", $id_pembeli);
        $stmt->bindParam(":tanggal", $tanggal);
        $stmt->bindParam(":keterangan", $keterangan);
        $stmt->bindParam(":id_transaksi", $id_transaksi);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_transaksi WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_transaksi", $id);
        $stmt->execute();

    }

}

