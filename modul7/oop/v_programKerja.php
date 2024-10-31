<html>
<head></head>
<body>
<h2>Daftar Program Kerja BEM</h2>
  <table>
    <tbody>
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
      </tr>
    </tbody>
    <?php
      foreach($proker as $row){
        echo "<tr>
                <td>".$row['nomorProgram']."</td>
                <td>".$row['namaProgram']."</td>
                <td>".$row['suratKeterangan']."</td>
              </tr>";
      }
    ?>
</body>
</html>
