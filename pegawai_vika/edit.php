<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <div class="container mt-3">
	

	<center><h3>EDIT DATA PEGAWAI</h3></center>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
      <label for="email">Nama</label>
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <input type="text" class="form-control" name="user_nama" value="<?php echo $d['user_nama']; ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">Kontak</label>
      <input type="number" class="form-control" name="user_kontak" value="<?php echo $d['user_kontak']; ?>">
    </div>
     <div class="mb-3">
      <label for="pwd">Alamat</label>
      <input type="text" class="form-control" name="user_alamat" value="<?php echo $d['user_alamat']; ?>">
    </div>
    <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
		</tr>
		<tr>
		<td></td>
		<th><a href  ="index.php"><button type="button" class="btn btn-warning">BACK</button></a></th>
	    <td><button type="submit" class="btn btn-success">SIMPAN</button></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>