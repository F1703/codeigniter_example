<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {
	function __construc(){
		// $this->load->model('Model_pelicula');
		// $this->load->helper('form');
		// $this->load->helper('url');
		// los helper form y url añadirlos en /config/autoload.php
	}

	public function index(){
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/formulario');
		$this->load->model('Model_pelicula','mpeli');
		$datos['datos']=$this->mpeli->listadopelicula();

		$this->load->view('peliculas/view_listadopeliculas',$datos);
	}

	public function nuevo(){
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/formulario');
		$this->load->view('peliculas/layouts/footer');
	}

	public function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre')
		);
		$this->load->model('Model_pelicula','modelopelicula');
		$this->modelopelicula->crearpelicula($data);
		redirect('pelicula');
	}


	public function listado(){
		$this->load->view('peliculas/layouts/header');
		$this->load->model('Model_pelicula','mpeli');
		$datos['datos']=$this->mpeli->listadopelicula();
		$this->load->view('peliculas/view_listadopeliculas',$datos);
	}


	public function edit($id){
		$this->load->model('model_pelicula','mp');
		$peli['peli']=$this->mp->getPelicula($id);
		$this->load->view('peliculas/layouts/header');
		$this->load->view('peliculas/view_editar',$peli);
		$this->load->view('peliculas/layouts/footer');
	}

	public function delete($id){
		$this->load->model('model_pelicula','mp');
		$this->mp->getDelete($id);
		redirect('pelicula');
		
	}

	public function store(){
		$datos=array(
			'idpelicula'=>$this->input->post('idpelicula'),
			'nombre'=>$this->input->post('nombre')
		);
		$this->load->model('model_pelicula','mp');
		$this->mp->getstore($datos);
		redirect('pelicula');
	}
}
