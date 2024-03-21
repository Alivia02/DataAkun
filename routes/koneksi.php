<?php
$koneksi = new mysqli('localhost', 'rid21957216_alivia', 'Fthymn04_', 'id21957216_dataakun');
if ($koneksi->connect_error) {
    die("Koneksi gagal:" . $koneksi->connect_error);
}