<?php
include 'database.php';

  if (isset($_GET['idproduk']))
  {
    $idproduk = ($_GET["idproduk"]);
    $sql = "SELECT * FROM produk WHERE idproduk = '$idproduk'";
    $hasil = mysqli_query($kon, $sql);
    
    if  (!$hasil)
    {
      die ("Gagal query..".$mysqli_error($kon).
          " - ".mysqli_error($kon));
    }
    $data = mysqli_fetch_assoc($hasil);
    if (!count($data)) 
    {
      echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
    }
  } else {
      echo "<script>alert('Masukkan data idproduk.');window.location='tampil.php';</script>";
  }   
?>

<!DOCTYPE html>
<html>
  <head>
    <title>edit</title>
    <style type="text/css">
      body{
            font-family: 'Secular';
            background-color: #FFF8DC;
      }
      h1 {
            text-transform: uppercase;
            color: #DB7093;
            text-shadow: 3px 2px 1px #B0C4DE;
            font-size: 35px;
      }
      button {
            background-color: #FA8072;
            color: #000000;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            font-family: 'Nerko';
            text-shadow: 1px 1px 1px #ccc;
            margin-top: 20px;
      }
      label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
      }
      input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #FA8072 ;
      }
      div {
            width: 100%;
            height: auto;
      }
      .base {
            width: 700px;
            height: auto;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background: #ededed;
      }
    </style>
  </head>

  <body>
      <center>
        <h1>Edit Skincare</h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <input name="idproduk" value="<?php echo $data['idproduk']; ?>"  hidden />
        <div>
          <label> Merk </label>
          <input type="text" name="merk" value="<?php echo $data['merk']; ?>" autofocus="" required="" />
        </div>

        <div>
          <label> Jenis </label>
         <input type="text" name="jenis" value="<?php echo $data['jenis']; ?>" />
        </div>

        <div>
          <label> Harga </label>
         <input type="text" name="harga" value="<?php echo $data['harga']; ?>" />
        </div>

        <div>
          <label> Stok </label>
         <input type="text" name="stok" value="<?php echo $data['stok']; ?>" />
        </div>

        <div>
          <label> Gambar </label>
          <img src="pict/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" />
        </div>

        <div>
         <button type="submit"> Save </button>
        </div>
        
        </section>
      </form>
  </body>
</html>