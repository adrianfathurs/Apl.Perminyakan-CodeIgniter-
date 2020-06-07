  <!-- Begin Page Content -->
  <div class="container-fluid">

  	<!-- Page Heading -->
  	<h1 class="h3 mb-4 text-gray-800">Metode Analog</h1>
  	<div class="card">
  		<div class="card-header">
  			Rumus
  		</div>
  		<div class="card-body">
  			
  			<b><p class="card-text">BAF = 7758 X &Phi; X (1-Swi) X RF / Boi;</p></b>
  			<hr>
  			<small>
  				<p>Diketahui : </p>
  				<p>&Phi; : Porositas batuan (%)</p><br>
  				<p>Swi 	: Saturasi Awal (%)</p><br>
  				<p>RF 	: Faktor Perolehan (%)</p><br>
  				<p>Boi 	: Faktor Volume Formasi Minyak Awal (rb/stb)</p><br>
  				<p>BAF 	: Barels Per Acre Foot</p><br>
  			</small>
  			
  		</div>
  	</div>
  	<br>
  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  		Hitung
  	</button>
  	

  	<!-- Modal -->
  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
  				</div>
  				<div class="modal-body">
  					<div class="card">
  						<div class="card-header">
  							Hitung
  						</div>
  						<div class="card-body">
  							<form action="<?php echo base_url('metode/setTambahAnalog')?>" method="POST">
  								<div class="form-group">
  									<label for="porositasBatuan">Porositas batuan</label>
  									<input type="number" class="form-control" id="porositasBatuan" name="porositasBatuan" placeholder="porositas" required="">
  								</div>
  								<div class="form-group">
  									<label for="saturasiAwal">Saturasi Awal</label>
  									<input type="number" class="form-control" id="saturasiAwal" name="saturasiAwal" placeholder="saturasiAwal" required="">
  								</div>
  								<div class="form-group">
  									<label for="faktorPerolehan">Faktor Perolehan</label>
  									<input type="number" class="form-control" id="faktorPerolehan" name="faktorPerolehan" placeholder="faktorPerolehan" required="">
  								</div>
  								<div class="form-group">
  									<label for="faktorVolume">Faktor Volume Formasi Minyak Awal</label>
  									<input type="number" class="form-control" id="faktorVolume" name="faktorVolume" placeholder="faktorVolume" required="">
  								</div>
  								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  								<button type="submit" id="btnAnalog" class="btn btn-primary" name="btnAnalog" value="submit" required="">Hitung</button>
  							</form>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<br>
  	<div class="card">
  		<div class="card-header">
  			Hasil
  		</div>
  		<div class="card-body">
  			<table class="table">
  				<thead> 
  					<tr>
  						<th scope="col">No</th>
  						<th scope="col">&Phi; (%)</th>
  						<th scope="col">(1-Swi)</th>
  						<th scope="col">RF (%)</th>
  						<th scope="col">Boi (rb/stb)</th>
  						<th scope="col">baf</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php $i=1;foreach ($analog as $key):?>
  					<tr>
  					<td><?=$i++?></td>	
  					<td><?= $key['phi'];?></td>
  					<td><?= $key['hitungswi'];?></td>
  					<td><?= $key['rf'];?></td>
  					<td><?= $key['boi'];?></td>
  					<td><?= $key['baf'];?></td>
  					</tr>
  				<?php endforeach;?>
  				</tbody>
  			</table>
  		</div>
  	</div>
  </div>
  <!-- /.container-fluid -->
  <!-- <script type="text/javascript">
  	$(document).ready(function(){
  		$(document).on("click",'#btnAnalog',function(){
  			var postform ={
  				'konstanta'	: 7758,	
  				'porositasBatuan' : document.getElementById("#porositasBatuan").value,
  				'saturasiAwal' : document.getElementById("#saturasiAwal").value,
  				'faktorPerolehan' : document.getElementById("#faktorPerolehan").value,
  				'faktorVolume' : document.getElementById("#faktorVolume").value
  			};
  			$.ajax({
  				type :"post",
  				url:'http://localhost/templateyysi/Metode/setTambahAnalog',
  				data:postform,
  				dataType:'json',
  				success: function(data){
  					console.log(data);
  				}
  			});

  		});
  	});
  </script> -->
