<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {
	function __construc(){
		parent::__construct();
		$this->load->model('peliculas/model_pelicula');
		$this->load->helper('form');
	}

	public function index(){
		$data['peli']=$this->model_pelicula->index();
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/view_pelicula',$data);
		$this->load->view('peliculas/layouts/footer');

	}

	public function nuevo(){
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/formulario');
		$this->load->view('peliculas/layouts/footer');
	}
}
