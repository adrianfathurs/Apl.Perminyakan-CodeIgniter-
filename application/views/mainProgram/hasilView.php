



<div class="container-fluid"> 
  <div class="card">
    <div class="card-header">
      <h2><strong>PERHITUNGAN NET CASH FLOW <?=$metode?></strong></h2>
    </div>

    <div class="card-body">
      <h4><b>Diketahui :</b></h4>
      <ul>
        <li>
          <p><b> Harga Minyak</b> : <?=$hargaMinyak?> $M/b</p></bold></li>
          <li><p><b> Capital Invest</b> : <?=$capitalInvest?> $M</p></bold></li>
          <li><p><b> Non Capital Invest</b> : <?=$noncapitalInvest?> $M</p></bold></li>
          <li><p><b> Pajak</b> : <?=$pajak?> </p></bold></li>
          <li><p><b> Jumlah tahun</b> : <?=count($produksiMinyak)?> Tahun</p></bold></li>
        </ul>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Tahun</th>
              <th scope="col">Produksi Minyak($/bbl)</th>
              <th scope="col">Income($M)</th>
              <th scope="col">Biaya Pengeluaran($M)</th>
              <th scope="col">Di($M)</th>
              <th scope="col">Taxable Income($M)</th>
              <th scope="col">Tax (<?php echo $pajak?>) ($M)</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if($op==1)
            {
              $jumlah=count($income);
              $k=0;
              for($i=0;$i<$jumlah;$i++):
                ?>
                <tr>
                  <center><td><?php echo ++$k?></td></center>
                  <center><td><?php echo $produksiMinyak[$i]?></td></center>
                  <center><td><?php echo $income[$i]?></td></center>
                  <center><td><?php echo $opex[$i]?></td></center> 
                  <center><td><?php echo $Di?></td></center>         
                  <center><td><?php echo $taxableIncome[$i]?></td></center> 
                  <center><td><?php echo $tax[$i]?></td> </center>
                </tr>
              <?php endfor;}?>

              <?php 
              if($op==2)
              {
                $jumlah=count($income);
                $k=0;
                for($i=0;$i<$jumlah;$i++):
                  ?>
                  <tr>
                    <center><td><?php echo ++$k?></td></center>
                    <center><td><?php echo $produksiMinyak[$i]?></td></center>
                    <center><td><?php echo $income[$i]?></td></center>
                    <center><td><?php echo $opex[$i]?></td></center> 
                    <center><td><?php echo $Di[$i]?></td></center>         
                    <center><td><?php echo $taxableIncome[$i]?></td></center> 
                    <center><td><?php echo $tax[$i]?></td> </center>
                  </tr>
                <?php endfor;}?>
              </tbody>
            </table>
            <hr>

            <p>Hasil Net Cash Flow : <b><?= $ncfUndiscounted?></b> $M</p>    
          </div>
        </div>
      </div>
