<?php 
include_once 'config/Database.php';

abstract class User {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }

    abstract public function sidebar();

    abstract public function mainContent($username);

    abstract function profile($username);

    abstract function listPrestasi($search = '', $filterKategori = '', $filterJuara = '', $filterJurusan = '', $sort = 'newest');

    abstract public function profilDetail($no_induk);

    abstract public function getPrestasiDetail($id_prestasi);
}
?>