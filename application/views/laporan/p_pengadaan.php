<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <link rel="stylesheet" href="<?=base_url()?>src/css/laporan.css">

    <title>Data Aset</title>
  </head>
  <body>
  	<meta http-equiv="REFRESH" content="5; url=<?=base_url('laporan/pengadaan')?>"> 
  	<div class="container">
  		<div class="row pt-4">
  			<div class="col-md-2">
          <img src="<?=base_url()?>src/img/logo/AdminLTELogo.png" class="kiri" alt="">    
        </div>
        <div class="col-md-10 text-center">
          <h2>NAMA YAYASAN</h2>
          <h3>NAMA SEKOLAH</h3>
          <P>Alamat </P>
        </div>
  		</div>
  		<hr style="border: 1px solid black;">
  		<div class="row">
  			<div class="col text-center">
  				<strong>Aset <?=$lokasi['nama_lokasi']?></strong>
  			</div>
  		</div>
  		<div class="row pt-3">
  			<div class="col text-center">
  				<table class="table table-bordered">
  					<thead>
  						<th>NO.</th>
  						<th>NAMA</th>
  						<th>VOLUME</th>
  						<th>SATUAN</th>
  						<th>HARGA (Rp.)</th>
  						<th>JUMLAH (Rp.)</th>
  					</thead>
  					<tbody>
  						<?php 
  						$sum=0; 
  						$no=1; 
  							foreach ($pnd as $row): 
  						$sum+=$row['volume']*$row['harga_satuan'];			
  						?>		
  						<tr>
  							<td><?=$no++;?></td>
  							<td><?=$row['nama_aset']?></td>
  							<td><?=$row['volume']?></td>
  							<td><?=$row['satuan']?></td>
  							<td><?=laporan($row['harga_satuan'])?></td>
  							<td><?=laporan($row['volume']*$row['harga_satuan'])?></td>
  						</tr>
  						<?php endforeach ?>
  					</tbody>
  					<tfoot>
  						<tr>
  							<td colspan="5"><b>Jumlah</b></td>
  							<td><?=laporan($sum);?></td>
  						</tr>
  					</tfoot>
  				</table>
  			</div>
  		</div>
  		<div class="row pt-4">
  			<div class="col-md-6">
          <p>Mengetahui, </p>
          <p class="ex1">Kepala Sekolah</p>
          Nama Kepsek</br>
          NIP. 
        </div>
        <div class="col-md-6 text-right">
          <p>Tempat, <?=tgl_indo(date('Y-m-d'))?></p>
          <p class="ex1">WK. Sapras</p>
          Nama kepala</br>
          NIP. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
  		</div> 			
  	</div>

  	<script>
  		window.print();
  	</script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>