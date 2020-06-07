  <!-- Begin Page Content -->
  <div class="container-fluid">

  	<!-- Page Heading -->
  	<h1 class="h3 mb-4 text-gray-800">Metode Volumetrik</h1>
  	<div class="card">
  		<div class="card-header">
  			<div class="row">
          <div class="col-6">
            Rumus IGIP (Initial Gas In Place)
          </div>
          <div class="col-6">
            Rumus IOIP (Initial Oil In Place)
          </div>
        </div>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-6">
           <b><p class="card-text">IGIP = 43560 X A X h X &Phi; X (1-Swi) / Bgi</p></b>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalIGIP">
            Hitung IGIP
          </button>
        </div>
        <div class="col-6">
          <b><p class="card-text">IOIP = 7758 X A X h X &Phi; X (1-Swi) / Boi</p></b>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalIOIP">
            Hitung IOIP
          </button>
        </div>
      </div>
      <hr>
      <small>
        <p>Diketahui : </p>
        <p>&Phi;  : Porositas batuan (%)</p><br>
        <p>Swi 	  : Saturasi Awal (%)</p><br>
        <p>A 	    : Luas Pengeringan (ACRES)</p><br>
        <p>h      : Ketebalan rata-rata Informasi</p><br>
        <p>Boi    : Faktor Volume Formasi minyak awal (rb/stb)</p><br>
        <p>Bgi 	  : Faktor Formasi Volume Gas Awal</p><br>
      </small>
    </div>
  </div>
  <br>
  


  <!-- Modal IGIP-->
  <div class="modal fade" id="exampleModalIGIP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
       Hitung IGIP
     </div>
     <div class="card-body">
       <form action="<?php echo base_url('metode/setTambahVolumetrikIGIP')?>" method="POST">
        <div class="form-group">
         <label for="luasPengeringan">Luas Pengeringan</label>
         <input type="number" class="form-control" id="luasPengeringan" name="luasPengeringan" placeholder="Luas Pengeringan" required="">
       </div>
       <div class="form-group">
         <label for="ketebalanRata">Ketebalan rata-rata</label>
         <input type="number" class="form-control" id="ketebalanRata" name="ketebalanRata" placeholder="Ketebalan rata-rata" required="">
       </div>
       <div class="form-group">
         <label for="porositasBatuan">Porositas Batuan</label>
         <input type="number" class="form-control" id="porositasBatuan" name="porositasBatuan" placeholder="Porositas Batuan" required="">
       </div>
       <div class="form-group">
         <label for="saturasiAwal">Saturasi Awal</label>
         <input type="number" class="form-control" id="saturasiAwal" name="saturasiAwal" placeholder="Saturasi Awal" required="">
       </div>
       <div class="form-group">
         <label for="faktorFormasiGas">Faktor Formasi Volume Gas Awal</label>
         <input type="number" class="form-control" id="faktorFormasiGas" name="faktorFormasiGas" placeholder="faktorFormasi" required="">
       </div>
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" id="btnIGIP" class="btn btn-primary" name="btnIGIP" value="submit" required="">Hitung IGIP</button>
     </form>
   </div>
 </div>
</div>
</div>
</div>
</div>

<!-- Modal IOIP-->
<div class="modal fade" id="exampleModalIOIP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
     Hitung IOIP
   </div>
   <div class="card-body">
     <form action="<?php echo base_url('metode/setTambahVolumetrikIOIP')?>" method="POST">
      <div class="form-group">
       <label for="luasPengeringan">Luas Pengeringan</label>
       <input type="number" class="form-control" id="luasPengeringan" name="luasPengeringan2" placeholder="Luas Pengeringan" required="">
     </div>
     <div class="form-group">
       <label for="ketebalanRata">Ketebalan rata-rata</label>
       <input type="number" class="form-control" id="ketebalanRata" name="ketebalanRata2" placeholder="Ketebalan rata-rata" required="">
     </div>
     <div class="form-group">
       <label for="porositasBatuan">Porositas Batuan</label>
       <input type="number" class="form-control" id="porositasBatuan" name="porositasBatuan2" placeholder="Porositas Batuan" required="">
     </div>
     <div class="form-group">
       <label for="saturasiAwal">Saturasi Awal</label>
       <input type="number" class="form-control" id="saturasiAwal" name="saturasiAwal2" placeholder="Saturasi Awal" required="">
     </div>
     <div class="form-group">
       <label for="faktorFormasiMinyak">Faktor Formasi Volume Minyak Awal</label>
       <input type="number" class="form-control" id="faktorFormasiMinyak" name="faktorFormasiMinyak" placeholder="faktorFormasi" required="">
     </div>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" id="btnIOIP" class="btn btn-primary" name="btnIOIP" value="submit" required="">Hitung IOIP</button>
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
    <div class="row">
      <div class="col-6">       
       Hasil Perhitungan IGIP
     </div>
     <div class="col-6">       
       Hasil Perhitungan IOIP
     </div>
   </div>
 </div>
 <div class="card-body">
   <div class="row">
     <div class="col">  
       <table class="table">
        <thead> 
         <tr>
          <th scope="col">No</th>
          <th scope="col">A</th>
          <th scope="col">h</th>
          <th scope="col">&Phi;</th>
          <th scope="col">swi</th>
          <th scope="col">bgi</th>
          <th scope="col">igip</th>
        </tr>
      </thead>
      <tbody>
       <?php $a=0; foreach ($volumetrikigip as $key):?>
       <tr>
         <td><?=$a=$a+1?></td>	
         <td><?= $key['luaspengeringan'];?></td>
         <td><?= $key['ketebalanrata'];?></td>
         <td><?= $key['porositasbatuan'];?></td>
         <td><?= $key['swi'];?></td>
         <td><?= $key['bgi'];?></td>
         <td><?= $key['igip'];?></td>
       </tr>
     <?php endforeach;?>
   </tbody>
 </table>
</div>
<div class="col">  
 <table class="table">
  <thead> 
   <tr>
          <th scope="col">No</th>
          <th scope="col">A</th>
          <th scope="col">h</th>
          <th scope="col">&Phi;</th>
          <th scope="col">swi</th>
          <th scope="col">boi</th>
          <th scope="col">ioip</th>
        </tr>
</thead>
<tbody>
 <?php $a=0; foreach ($volumetrikioip as $keys):?>
 <tr>
   <td><?=$a=$a+1?></td>  
   <td><?= $keys['luaspengeringann'];?></td>
   <td><?= $keys['ketebalanrataa'];?></td>
   <td><?= $keys['porositasbatuann'];?></td>
   <td><?= $keys['swi'];?></td>
   <td><?= $keys['boi'];?></td>
   <td><?= $keys['ioip'];?></td>
 </tr>
<?php endforeach;?>
</tbody>
</table>
</div>
<!-- row -->
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->
