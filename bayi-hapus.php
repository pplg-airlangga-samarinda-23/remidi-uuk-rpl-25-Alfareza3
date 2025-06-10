<?php

require 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id_bayi = $_GET['id'];
    $sql = "DELETE FROM bayi WHERE id_bayi=?";
    $row = $koneksi->execute_query($sql, [$id_bayi]);

    if ($row){
        header("location:bayi.php");
    }
}
?>