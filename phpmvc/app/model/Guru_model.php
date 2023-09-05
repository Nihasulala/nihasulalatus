<?php
class Guru_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBlog()
    {
       $this->db->query("SELECT * FROM " .$this->table);
       return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " .$this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }
    public function tambahDataGuru($data)
    {
        $query = " INSERT INTO guru VALUES 
        ('', :nama, :kode_guru, :mapel, :prod_nonprod )";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_nonprod', $data['prod_nonprod']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahdata()
    {
        $query="UPDATE guru SET
            nama = :nama,
            kode_guru = :kode_guru,
            mapel = :mapel,
            prod_nonprod = :prod_nonprod
            WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama',$guru['nama']);
    $this->db->bind('kode_guru',$guru['kode_guru']);
    $this->db->bind('mapel',$guru['mapel']);
    $this->db->bind('prod_nonprod',$guru['prod_nonprod']);
    $this->db->bind('id',$guru['id']);
    
    $this->db->execute();

    return $this->db->rowCount();
    
    }
    
}