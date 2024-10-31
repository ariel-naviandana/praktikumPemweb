<?php

$mysqli = new mysqli("localhost", "root", "root", "praktikumweb");

if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}