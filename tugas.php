<!DOCTYPE html>
<html>
<head>
	<title>LUAS LINGKARAN</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
  <h1 align="center">Menghitung Luas Lingkaran</h1>
  <hr id="atas">

	<div class="luaslingkaran">
		<h2 class="judul" align="center">LUAS LINGKARAN</h2>
		<hr id="bawah">
		
		<form method="post" action="tugas.php">			
			Masukan Jari-jari     : <input type="text" name="jari" class="bil" autocomplete="off" placeholder="                  0" >
			<br>
			<button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
			<br>
			
				<?php 
					if(isset($_POST['hitung'])){
					$jari = $_POST['jari'];
					$phi = 22/7;

					$hasil = $phi*($jari*$jari);

					
	}
	?>
	<ul>
		
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<h6 class="tulisan">Hasil : <?php echo "$hasil";?></h6>
		<?php }else{ ?>
			
		<?php } ?>	
	</ul>
			
<h6 class ="tanda">By : Nur Kholiq</h6>




</body>
</html>