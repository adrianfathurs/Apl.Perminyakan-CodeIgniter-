<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		
		$this->load->helper('form');
		
		$this->load->library('session');
		
		
		/*Agar dapat ngeload user model tanpa deklasrasi disetiap fungsi yang ada dia auth*/
		
		
	}

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('sidebar/sidebar');
		$this->load->view('header/top');
		$this->load->view('mainProgram/mainContent');
		$this->load->view('footer/footer');
	}

	
}
