<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelicula extends CI_Model {
	public function __construc(){
		parent::__construct();
		
	}

	public function listadoPelicula(){
		$this->load->database();
		$this->db->order_by('idpelicula','asc');
		$datos = $this->db->get('pelicula');

		if ($datos->num_rows()>0) return $datos; 
		else return false;
	}

	public function crearPelicula($data){
		var_dump($data);
		$this->load->database();
		$this->db->insert('pelicula',$data);	
	}

	public function getPelicula($id){
		$this->load->database();
		$query=$this->db->get_where('pelicula',['idpelicula'=>$id]);
		return $query;
	}

	public function getStore($datos){
		$this->load->database();
		$this->db->set('nombre',$datos['nombre']);
		$this->db->where('idpelicula',$datos['idpelicula']);
		$this->db->update('pelicula');
	}

	public function getDelete($id){
		$this->load->database();
		$this->db->delete('pelicula',['idpelicula'=>$id]);
	}

}