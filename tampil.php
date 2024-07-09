<?php
  include('database.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tampil</title>
    <style type="text/css">
      body {
        font-family: 'Secular';
        background-color: #FFF8DC;
        
      }
      h1 {
        text-transform: uppercase;
        color: 		#DB7093;
        text-shadow: 3px 2px 1px #B0C4DE;
        font-size: 35px;

      }
      table {
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        font-size: 10pt;
        border-spacing: 0;
        width: 80%;
        margin: 10px auto 10px auto;
     }
      table thead th {
        background-color: #FA8072;
        border: solid 1px 	#708090;
        color: 	#000000;
        padding: 10px;
        text-align: left;
        font-size: 15px;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
      }
      table tbody td {
        background-color: #F8F8FF;
        border: solid 1px	#708090;
        color: #000000;
        padding: 10px;
        font-size: 12pt;
        text-shadow: 1px 1px 1px #A9A9A9;
      }
      .btn {
        background-color: #ededed;
        color: #1f2833;
        padding: 10px;
        text-decoration: none;
        font-size: 12px;
      }
      .btn-update {
        border: 1px solid #00b3a8;
        background: #00b3a8 url('edit.png') no-repeat 5px 4px;
        height: 22px;
        padding-left: 15px;
        padding-top: 5px;
      }
      .btn-delete {
        border: 1px solid #db5d59;
        background: #db5d59 url('hapus.png') no-repeat 5px 4px;
        height: 22px;
        padding-left: 15px;
        padding-top: 5px;
      }
    </style>
  </head>

  <body>
    <center><h1>DAFTAR SKINCARE</h1><center>
    <center><a href="index.php" class="btn">&nbsp; Home</a>
            <a href="create.php" class="btn">+ &nbsp; Tambah daftar</a>
    <center><br/>
    <br/>
    <table>
      <thead>
        <tr >
          <th>No</th>
          <th>Foto</th>
          <th>Merk</th>
          <th>Jenis</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Operasi</th>
        </tr>
    </thead>
    <tbody>

      <?php
      $sql = "SELECT * FROM produk ORDER BY idproduk ASC";
      $hasil  = mysqli_query($kon, $sql);
      if  (!$hasil) {
        die ("Query Error: ".mysqli_errno($kon).
        " - ".mysqli_error($kon));
      }

      $no = 1;
      while($row = mysqli_fetch_assoc($hasil))
      {
      ?>
      
        <tr style="text-align: center;">
            <td><?php echo $no; ?></td>
            <td ><img src="pict/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
            <td><?php echo $row['merk']; ?></td>
            <td><?php echo $row['jenis']?></td>
            <td><?php echo $row['harga']?></td>
            <td><?php echo $row['stok']?></td>

            <td style="text-align: center;">
            <a href="edit.php?idproduk=<?php echo $row['idproduk']; ?>"><input type='button' class='btn-update'></a>
            <a href="proses_hapus.php?idproduk=<?php echo $row['idproduk']; ?>"><input type='button' class='btn-delete'></a>
            </td>
        </tr>

        <?php
        $no++;
      }
      ?>
    </tbody>
    </table>
  </body>
</html>