<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {


	public function __construct()
	{
		$this->load->database();
	}

   public function crear($datos)
   {
	   $query = $this->db->insert("usuarios", $datos);
	    
   }
 
}