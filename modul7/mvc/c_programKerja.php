<?php

include "m_programKerja.php";

class c_programKerja {

public $model;

public function __construct($nomorProgram, $namaProgram, $suratKeterangan){
    $this->model = new m_programKerja($nomorProgram, $namaProgram, $suratKeterangan);
}

public function invoke(){
    $proker = $this->model->getSemuaPogramKerja();
    include "v_programKerja.php";
}

}