<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Somos extends CI_Controller {

	public function index()
	{

		$this->load->view('sitio/header');
		$this->load->view('menu/top');
		$this->load->model('Categorias');
	$data4['categorias'] = $this->Categorias->catArray();
	$this->load->view('menu/cat',$data4);

		$this->load->view('contenido/somos');

		
		$this->load->view('sitio/sucursales');
		$this->load->view('sitio/footer');


	}
}
