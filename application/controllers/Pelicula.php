<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {
	function __construc(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/view_pelicula');
		$this->load->view('peliculas/layouts/footer');
	}
}
