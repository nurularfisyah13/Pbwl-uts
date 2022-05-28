<?php 

class Supplier extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_supplier";
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
        $nama_supplier = $_POST['nama_supplier'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tb_supplier (nama_supplier, no_telp, alamat) VALUES (:nama_supplier, :no_telp, :alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_supplier", $nama_supplier);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();

    }

    public function edit($id)
    {
        
        $sql = "SELECT * FROM tb_supplier WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_supplier", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_supplier = $_POST['nama_supplier'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $id_supplier = $_POST['id_supplier'];

        $sql = "UPDATE tb_supplier SET nama_supplier=:nama_supplier, no_telp=:no_telp, alamat=:alamat WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_supplier", $nama_supplier);
        $stmt->bindParam(":no_telp", $no_telp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_supplier", $id_supplier);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql = "DELETE FROM tb_supplier WHERE id_supplier=:id_supplier";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pembeli", $id);
        $stmt->execute();

    }

}

