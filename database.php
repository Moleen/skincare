<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "skincare";

    $kon = mysqli_connect($host, $user, $pass);
    if (!$kon)
        die("Gagal Koneksi....");

    $hasil = mysqli_select_db($kon, $dbName);
    if (!$hasil)
    {
        $hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
        if (!$hasil) die("Gagal Buat Database");
        else
            $hasil = mysqli_select_db($kon, $dbName);
            if (!$hasil) die ("Gagal Konek Database");
    }
    $sqlTabelProduk = "create table if not exists produk (
        idproduk int auto_increment not null primary key,
        merk varchar(40) not null,
        jenis varchar(40) not null,
        harga int not null default 0,
        stok int not null default 0,
        foto varchar(50) not null default '',
        KEY(merk))";
        
        mysqli_query ($kon, $sqlTabelProduk) or die ("Gagal Buat Tabel Produk ");
       // echo "tabel siap!";
?>