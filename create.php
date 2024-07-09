<?php
  include('database.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>create</title>
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
              outline-color: #FA8072;
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
      <h1> TAMBAH DAFTAR SKINCARE</h1>
    <center>
    <form method="POST" action="simpan.php" enctype="multipart/form-data" >
    <section class="base">
      <div>
          <label>Merk</label>
          <input type="text" name="merk" autofocus="" required="" />
      </div>

      <div>
          <label >Jenis</label>
          <input type="text" name="jenis" required="" />
      </div>

      <div>
          <label>Harga</label>
          <input type="text" name="harga" required="" />
      </div>

      <div>
          <label>Stok</label>
          <input type="text" name="stok" required="" />
      </div>

      <div>
          <label>Gambar</label>
          <input type="file" name="foto" required="" />
      </div>

      <div>
          <button type="submit">Create</button>
      </div>
    </section>
    </form>
</body>
</html>
