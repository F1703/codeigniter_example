<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelicula extends CI_Model {
	function __construc(){
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		$data= $this->db->get('pelicula');
		return $data;
	}
}