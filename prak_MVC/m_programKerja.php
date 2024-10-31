<?php

require "./koneksiMVC.php";

class m_programKerja
{
    private $database;
    protected $tablename = "proker";

    public function __construct()
    {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $nomorProgram = $this->database->real_escape_string($nomorProgram);
        $namaProgram = $this->database->real_escape_string($namaProgram);
        $suratKeterangan = $this->database->real_escape_string($suratKeterangan);

        $query = "INSERT INTO $this->tablename (nomorProgram, namaProgram, suratKeterangan) VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')";
        return $this->database->query($query);
    }

    public function getAll()
    {
        $result = $this->database->query("SELECT * FROM $this->tablename");
        $programs = $result->fetch_all(MYSQLI_ASSOC);
        return $programs;
    }

    public function delete($id)
    {
        $id = $this->database->real_escape_string($id);
        return $this->database->query("DELETE FROM $this->tablename WHERE nomorProgram = '$id'");
    }

    public function update($id, $nama, $surat)
    {
        $id = $this->database->real_escape_string($id);
        $nama = $this->database->real_escape_string($nama);
        $surat = $this->database->real_escape_string($surat);

        return $this->database->query("UPDATE $this->tablename SET namaProgram = '$nama', suratKeterangan = '$surat' WHERE nomorProgram = '$id'");
    }
}
