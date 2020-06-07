<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">KALKULATOR NET CASH FLOW</h1>
	<div class="card">
		<div class="card-body">
			<form method="post" action=<?= base_url("Cashflow/straightline")?>>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="hargaMinyak">Harga Minyak($/bbl)</label>
							<input type="number" class="form-control" id="hargaMinyak" name="hargaMinyak" required="">
						</div>
						<div class="form-group">
							<label for="capitalInvest">Capital Invest($ M)</label>
							<input type="number" class="form-control" id="capitalInvest" name="capitalInvest" required="">
						</div>
						<div class="form-group">
							<label for="noncapitalInvest">non-Capital Invest($ M)</label>
							<input type="number" class="form-control" id="noncapitalInvest" name="noncapitalInvest" required="">
						</div>
						<div class="form-group">
							<label for="pajak">Pajak(%)<small>Index angka(1-100)</small></label>
							<input type="number" class="form-control" id="pajak" min="0" max="100" name="pajak" required="">
						</div>
						<div class="form-group">
							<label for="jumlahCadanganMinyak">Jumlah Cadangan Minyak(Mbbl)</label>
							<input type="number" class="form-control" id="jumlahCadanganMinyak" name="jumlahCadanganMinyak" required="">
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect2">Example multiple select</label>
							<select class="form-control" id="metode" name="metode">
								<option value="1">Metode Straight Line</option>
								<option value="2">Metode Declining Balance</option>
								<option value="3">Metode double declinein</option>
							</select>
						</div>
					</div>
					<div class="col-6" id="dynamictambah">
						<div class="row">
							<div class="col-3"> 
								<div class="card-header" id="textTahun" name="textTahun[]">
									Tahun 1
								</div>
							</div>
							<div class="col-3"> 
								<button class=" btn btn-primary" name="tambahProduksi" id="tambahProduksi">Tambah Produksi</button>
							</div>
						</div>
						<div class="row"> 
							<div class="form-group">
								<label for="produksiMinyak">Produksi Minyak(Mbbl)</label>
								<input type="number" class="form-control" id="produksiMinyak" name="produksiMinyak[]" required="">
							</div>
							<div class="form-group">
								<label for="biayaPengeluaran">Biaya Pengeluaran($ /bbl)</label>
								<input type="number" class="form-control" id="biayaPengeluaran" name="biayaPengeluaran[]" required="">
							</div>
						</div>
					</div>
				</div>
				<button type="submit" id="btnSubmit" class="btn btn-success" >Submit</button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->
<script type="text/javascript">
	$(document).ready(function(){
		var i=1;
		$("#tambahProduksi").click(function(){
			i++;
			$('#dynamictambah').append('<div class="row" id="row'+i+'"><div class="col-3"> <div class="card-header"id="textTahun" name="textTahun[]">Tahun '+i+'</div></div><div class="col-3"> <button class=" btn btn-danger btn_remove" name="hapusProduksi" id="'+i+'">Hapus Produksi</button></div></div><div class="row" id="row1'+i+'"><div class="form-group"><label for="produksiMinyak">Produksi Minyak(Mbbl)</label><input type="number" class="form-control" id="produksiMinyak" name="produksiMinyak[]" required=""></div><div class="form-group"><label for="biayaPengeluaran">Biaya Pengeluaran($ /bbl)</label><input type="number" class="form-control" id="biayaPengeluaran" name="biayaPengeluaran[]" required=""></div></div></div>')
			console.log(i);
		});

		$(document).on('click','.btn_remove',function(){
			var btn_hapus= $(this).attr("id");
			$('#row'+btn_hapus+'').remove();
			$('#row1'+btn_hapus+'').remove();
		});

		

	});
</script>

 