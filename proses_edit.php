<?php
include 'database.php';

  $idproduk = $_POST['idproduk'];
  $merk   = $_POST['merk'];
  $jenis     = $_POST['jenis'];
  $harga   = $_POST['harga'];
  $stok     = $_POST['stok'];
  $foto = $_FILES['foto']['name'];

  //jika foto diubah 
  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
    {
        move_uploaded_file($file_tmp, 'pict/'.$nama_gambar_baru);
        
        // jalankan query UPDATE berdasarkan IDPRODUK yang produknya kita edit
        $sql  = "UPDATE produk SET merk = '$merk', jenis = '$jenis', harga = '$harga', stok = '$stok', foto = '$nama_gambar_baru'";
        $sql .= "WHERE idproduk = '$idproduk'";
        $hasil = mysqli_query($kon, $sql);
        if(!$hasil)
        {
          die ("Query gagal dijalankan: ".mysqli_errno($kon).
                " - ".mysqli_error($kon));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, png, jpeg.');window.location='edit.php';</script>";
    }
  } else {
      $sql  = "UPDATE produk SET merk = '$merk', jenis = '$jenis', harga = '$harga', stok = '$stok'
                WHERE idproduk = '$idproduk'";
      $hasil = mysqli_query($kon, $sql);
      
      if(!$hasil)
      {
          die ("Query gagal dijalankan: ".mysqli_errno($kon).
                             " - ".mysqli_error($kon));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='tampil.php';</script>";
      }
  }
