<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

   public function guardar($datos)
   {
	   $query = $this->db->insert("libros", $datos);
   }
 
}