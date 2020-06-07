<?php

class Metode extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		
		
		$this->load->library('session');
		$this->load->model('AnalogModel');
		$this->load->model('VolumeModel');
		
		
		/*Agar dapat ngeload user model tanpa deklasrasi disetiap fungsi yang ada dia auth*/
		
		
	}
	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('header/top');
		$this->load->view('mainProgram/analogView');
		$this->load->view('footer/footer');
	}
	public function analog()
	{
		
			$data['analog']=$this->AnalogModel->getData();
			$this->load->view('header/header');
			$this->load->view('sidebar/sidebar');
			$this->load->view('header/top');
			$this->load->view('mainProgram/analogView',$data);
			$this->load->view('footer/footer');	
		

	}

	public function setTambahAnalog()
	{

				$konstanta=7758;
  				$porositasBatuan= $this->input->post('porositasBatuan');
  				$saturasiAwal =$this->input->post('saturasiAwal');
  				$faktorPerolehan =$this->input->post('faktorPerolehan');
  				$faktorVolume =$this->input->post('faktorVolume');

  				/*Perhitungan*/
  				$phi=$porositasBatuan/100;
  				$hitungswi=1-$saturasiAwal/100;
  				$RF=$faktorPerolehan/100;
  				$boi=$faktorVolume;
  				/*Masukan rumus*/
  				$baf=$konstanta*$phi*$hitungswi*$RF/$boi;

  			$data=[
  				'id'=>'',
  				'phi'=>$porositasBatuan,
  				'hitungswi'=>$hitungswi,
  				'rf'=>$RF,
  				'boi'=>$boi,
  				'baf'=>$baf
  				];

  				$this->AnalogModel->setTambah($data);
  				$data['analog']=$this->AnalogModel->getData();
  				redirect("metode/analog");
  				
	}

	public function volumetrik()
	{
		
			$data['volumetrikigip']=$this->VolumeModel->getDataVolumetrikigip();
			$data['volumetrikioip']=$this->VolumeModel->getDataVolumetrikioip();
			$this->load->view('header/header');
			$this->load->view('sidebar/sidebar');
			$this->load->view('header/top');
			$this->load->view('mainProgram/volumetrikView',$data);
			$this->load->view('footer/footer');	
		

	}

	public function setTambahVolumetrikIGIP()
	{
		$konstanta=43560;
		$A=$this->input->post('luasPengeringan');
		$h=$this->input->post('ketebalanRata');
		$phi=$this->input->post('porositasBatuan');
		$saturasiAwal=$this->input->post('saturasiAwal');
		$swi=1-$saturasiAwal/100;
		$bgi=$this->input->post('faktorFormasiGas');

		$igip=$konstanta*$A*$h*$phi*$swi/$bgi;
		$data=[
			'luaspengeringan'=>$A,
			'ketebalanrata'=>$h,
			'porositasbatuan'=>$phi,
			'swi'=>$swi,
			'bgi'=>$bgi,
			'igip'=>$igip
		];
		$this->VolumeModel->setTambahVolumetrikigip($data);
		redirect('metode/volumetrik');

	}

	public function setTambahVolumetrikIOIP()
	{
		$konstanta=7758;
		$A=$this->input->post('luasPengeringan2');
		$h=$this->input->post('ketebalanRata2');
		$phi=$this->input->post('porositasBatuan2');
		$saturasiAwal2=$this->input->post('saturasiAwal2');
		$swi=1-$saturasiAwal2/100;
		$boi=$this->input->post('faktorFormasiMinyak');

		$ioip=$konstanta*$A*$h*$phi*$swi/$boi;
		$data=[
			'luaspengeringann'=>$A,
			'ketebalanrataa'=>$h,
			'porositasbatuann'=>$phi,
			'swi'=>$swi,
			'boi'=>$boi,
			'ioip'=>$ioip
		];
		$this->VolumeModel->setTambahVolumetrikioip($data);
		redirect('metode/volumetrik');
	}
}
?>