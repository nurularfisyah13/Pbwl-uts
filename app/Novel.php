<?php 

class Novel extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_novel";
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
        $nama_novel = $_POST['nama_novel'];
        $penulis = $_POST['penulis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_supplier = $_POST['id_supplier'];

        $sql = "INSERT INTO tb_novel (nama_novel, penulis, harga, stok, id_supplier) VALUES (:cover, :nama_novel, :penulis, :harga, :stok, :id_supplier)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_novel", $nama_novel);
        $stmt->bindParam(":penulis", $penulis);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_novel WHERE id_novel=:id_novel";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_novel", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_novel = $_POST['nama_novel'];
        $penulis = $_POST['penulis'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_supplier = $_POST['id_supplier'];
        $id_novel = $_POST['id_novel'];

        $sql = "UPDATE tb_novel SET nama_novel=:nama_novel, penulis=:penulis, harga=:harga, stok=:stok, id_supplier=:id_supplier WHERE id_novel=:id_novel";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_novel", $nama_novel);
        $stmt->bindParam(":penulis", $penulis);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->bindParam(":id_novel", $id_novel);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_novel WHERE id_novel=:id_novel";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_novel", $id);
        $stmt->execute();

    }

}

