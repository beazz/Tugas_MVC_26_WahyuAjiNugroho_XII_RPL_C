<?php
class Guru_model
{
    private $table = 'data_guru';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllGuru(){
        $this->db->query("SELECT * from ". $this->table);
        return $this->db->resultAll();
    }
    public function getGuruById($id){
        $this->db->query("SELECT * from " . $this->table . '  WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDataGuru($data){
        $query = " INSERT INTO data_guru VALUES
        ('', :nama, :mapel, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGuru($id){
        $query = "DELETE FROM data_guru where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataguru($data){
        $query ="UPDATE data_guru SET
        nama = nama,
        mapel = mapel,
        alamat = alamat
        where id=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    } 

}