<?php
include "koneksi.php";
 
 $result = mysqli_query($mysqli, "SELECT * FROM db_perkuliahan");
 $add = mysqli_query($mysqli, "INSERT INTO db_perkuliahan(nama,npm,matkul,kehadiran) VALUES('$nama','$npm', '$matkul', '$kehadiran', NOW())");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Absensi Perkuliahan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">System absensi Perkuliahan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">	
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="tambah.php">Tambah</a>
      </div>
    </div>
  </div>
</nav>

<table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Npm</th>
                <th>Matkul</th>
                <th>Kehadiran </th>
            </tr>
        </thead>
        </table>
        <tbody>
        <?php
           	while($r =mysqli_fetch_array('$result'))
           		?>
           	<tr>	
                <td><?php echo $r['nama'];?></td>
                <td><?php echo $r['npm'];?></td>
                <td><?php echo $r['matkul'];?></td>
                <td><?php echo $r['kehadiran'];?></td>	
     		</tr>
        </tbody>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>