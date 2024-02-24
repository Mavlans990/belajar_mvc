<?php

class Buku_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataBuku(){
        $this->db->query('SELECT * FROM tb_buku');
        return $this->db->resultSet();
    }

    public function getDataBukuSearching($data){
        $this->db->query('SELECT * FROM tb_buku WHERE judul LIKE :judul ');
        $this->db->bind('judul', "%$data%");
        return $this->db->resultSet();
    }

    public function getEditDataBuku($data){
        $this->db->query('SELECT * FROM tb_buku WHERE id_buku = :id_buku ');
        $this->db->bind('id_buku', $data);
        return $this->db->resultSet();
    }

    public function tambahDataBuku($data){

        $this->db->query("INSERT INTO tb_buku VALUES ('', :judul, :nama, :tgl_terbit)");

        $this->db->bind('judul', $data['judul']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_terbit', $data['tgl_terbit']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataBuku($data){

        $this->db->query("UPDATE `tb_buku` SET `judul`= :judul,`nama`= :nama,`tgl_terbit`= :tgl_terbit WHERE id_buku = :id_buku ");

        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tgl_terbit', $data['tgl_terbit']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function deleteDataBuku($id){
        $this->db->query("DELETE FROM tb_buku WHERE id_buku = :id_buku");

        $this->db->bind('id_buku', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
}

?>