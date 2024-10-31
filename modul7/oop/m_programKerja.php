<?php

include "koneksiMVC.php";

class m_programKerja {
private $nomorProgram;
private $namaProgram;
private $suratKeterangan;
public $hasil = array();

public function __construct($nomorProgram, $namaProgram, $suratKeterangan) {
    $this->nomorProgram = $nomorProgram;
    $this->namaProgram = $namaProgram;
    $this->suratKeterangan = $suratKeterangan;
}

public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan)
{
    global $mysqli;
    $rs = $mysqli->query("INSERT INTO proker VALUES ('$this->nomorProgram',
    '$this->namaProgram', '$this->suratKeterangan')");
}

public function getSemuaPogramKerja() {
    global $mysqli;
    $rs = $mysqli->query("SELECT * FROM proker");

    while($row = $rs->fetch_assoc()) {
        $this->hasil[] = $row;
    }

    return $this->hasil;

}

}