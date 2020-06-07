<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashflow extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		
		
		/*Agar dapat ngeload user model tanpa deklasrasi disetiap fungsi yang ada dia auth*/
		
		
	}

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('header/top');
		$this->load->view('mainProgram/straightlineView');
		$this->load->view('footer/footer');
	}
	public function straightline()
	{
		$hargaMinyak=$this->input->post("hargaMinyak");
		$capitalInvest=intval($this->input->post("capitalInvest"));
		$noncapitalInvest=$this->input->post("noncapitalInvest");
		$pajak=$this->input->post("pajak");
		$jumlahCadanganMinyak=$this->input->post("jumlahCadanganMinyak");
		$metode=$this->input->post("metode");
		//data using array
		$produksiMinyak=$this->input->post("produksiMinyak");
		$biayaPengeluaran=$this->input->post("biayaPengeluaran");
		
		//digunakan untuk looping data
		$jumlah=count($biayaPengeluaran);

		//Perhitungan NCF expended
		$cashExpended=$capitalInvest+$noncapitalInvest;
		
		//perhitungan Income
		$income=array();
		for ($m=0; $m <$jumlah ; $m++) { 
			$income[$m]=intval($hargaMinyak)*intval($produksiMinyak[$m]);
		}
		//perhitungan persen pajak
		$pajak=$pajak/100;

		if($metode=="1")
		{
		//Perhitungan Di(straightline)
			//konstanta K(capitalInvest)
			$K=$capitalInvest;	
			//konstanta R(1/tahun)
			$R=1/$jumlah;
			//rumus Di
			$Di=$K*$R;
			$taxableIncome=array();
			$tax=array();
			$total=0;
			for($j=0;$j<$jumlah;$j++)
			{
			//perhitungan taxable income
				$taxableIncome[$j]=$income[$j]-intval($biayaPengeluaran[$j])-$Di;
			//perhitungan tax
				$tax[$j]=$taxableIncome[$j]*$pajak;
			//perhitungan NCF revenue
				$cashRevenue[$j]=$income[$j]-intval($biayaPengeluaran[$j])-$tax[$j];
			//perhitungan total NCF revenue
				$total=$total+$cashRevenue[$j];
			}
			//perhitungan NCF Undiscounted;
			$ncfUndiscounted=$total-$cashExpended;
			$data=array(
				'op'=>1,
				'metode'=>"METODE STRAIGHT LINE",
				'income'=>$income,
				'Di'=>$Di,
				'produksiMinyak'=>$produksiMinyak,
				'opex'=>$biayaPengeluaran,
				'taxableIncome'=>$taxableIncome,
				'tax'=>$tax,
				'cashRevenue'=>$cashRevenue,
				'cashExpended'=>$cashExpended,
				'total'=>$total,
				'pajak'=>$pajak,
				'capitalInvest'=>$capitalInvest,
				'noncapitalInvest'=>$noncapitalInvest,
				'hargaMinyak'=>$hargaMinyak,
				'ncfUndiscounted'=>$ncfUndiscounted
			);
			$this->load->view('header/header');
			$this->load->view('sidebar/sidebar');
			$this->load->view('header/top');
			$this->load->view('mainProgram/hasilView',$data);
			$this->load->view('footer/footer');
			

			/*var_dump($income);
			var_dump($biayaPengeluaran);
			var_dump($tax);
			var_dump($cashRevenue);
			var_dump($total);
			var_dump($ncfUndiscounted);*/
		}
		elseif ($metode=="2") {
		//Perhitungan Di(declining balance)
			//konstanta K(capitalInvest)
			$K=$capitalInvest;
			
			$Di=array();
			$taxableIncome=array();
			$tax=array();
			$total=0;
			$R=1/$jumlah;
			for ($i=0; $i<$jumlah; $i++) { 
					$Di[$i]=$K*$R*pow(1-$R,$i);
				//perhitungan taxable income
				$taxableIncome[$i]=$income[$i]-intval($biayaPengeluaran[$i])-$Di[$i];
				//perhitungan tax
				$tax[$i]=$taxableIncome[$i]*$pajak;
				//perhitungan NCF revenue
				$cashRevenue[$i]=$income[$i]-intval($biayaPengeluaran[$i])-$tax[$i];
				//perhitungan total NCF revenue
				$total=$total+$cashRevenue[$i];
			}

			$ncfUndiscounted=$total-$cashExpended;
			$data=array(
				'op'=>2,
				'metode'=>"METODE DECLINING BALANCE",
				'income'=>$income,
				'Di'=>$Di,
				'produksiMinyak'=>$produksiMinyak,
				'opex'=>$biayaPengeluaran,
				'taxableIncome'=>$taxableIncome,
				'tax'=>$tax,
				'cashRevenue'=>$cashRevenue,
				'cashExpended'=>$cashExpended,
				'total'=>$total,
				'pajak'=>$pajak,
				'capitalInvest'=>$capitalInvest,
				'noncapitalInvest'=>$noncapitalInvest,
				'hargaMinyak'=>$hargaMinyak,
				'ncfUndiscounted'=>$ncfUndiscounted
			);
			$this->load->view('header/header');
			$this->load->view('sidebar/sidebar');
			$this->load->view('header/top');
			$this->load->view('mainProgram/hasilView',$data);
			$this->load->view('footer/footer');
			
		}
	}

	
}