<?php

include_once("pengurusBEM.php");

class c_pengurus {
    public $model;

    public function __construct() {
        $this->model = new pengurusBEM();
    }

    public function getByNim($nim) {
        return $this->model->getByNim($nim);
    }

    public function insert($nim, $nama, $jabatan, $angkatan, $password) {
        $this->model->setPengurus($nim, $nama, $jabatan, $angkatan, $password);
        header('Location: login.php');
    }
}
