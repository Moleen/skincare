<?php
    include 'database.php';
    $idproduk  = $_GET['idproduk'];

    $sql = "DELETE FROM produk WHERE idproduk = '$idproduk' ";
    $hasil = mysqli_query($kon, $sql);

    if(!$hasil)
    {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
      " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='tampil.php';</script>";
    }