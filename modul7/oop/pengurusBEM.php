<?php

class pengurusBEM {

public $nama;
public $nim;
public $angkatan;
protected $jabatan;
private $foto;

public function setNama($nama) {
    $this->nama = $nama;
}

public function getNama() {
    echo $this->nama;
}

public function setNim($nim) {
    $this->nim = $nim;
}

public function getNim() {
    echo $this->nim;
}

public function setAngkatan($angkatan) {
    $this->angkatan = $angkatan;
}

public function getAngkatan() {
    echo $this->angkatan;
}

private function setJabatan($jabatan) {
    $this->jabatan = $jabatan;
}

public function getJabatan() {
    echo $this->jabatan;
}
}