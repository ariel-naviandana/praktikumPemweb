<?php

class pengurusBEM {
    private $database;
    protected $tablename = "pengurus";

    public function __construct() {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    public function getByNim($nim) {
        $result = $this->database->query("SELECT password, jabatan FROM $this->tablename WHERE nim = '$nim'");
        return $result->fetch_assoc(); 
    }

    public function setPengurus($nim, $nama, $jabatan, $angkatan, $password) {
        $nama = $this->database->real_escape_string($nama);
        $nim = $this->database->real_escape_string($nim);
        $jabatan = $this->database->real_escape_string($jabatan);
        $angkatan = $this->database->real_escape_string($angkatan);
        $password = $this->database->real_escape_string($password);

        $query = "INSERT INTO $this->tablename (nim, nama, angkatan, jabatan, password) VALUES ('$nim', '$nama', '$angkatan', '$jabatan', '$password')";
        return $this->database->query($query);
    }
}
