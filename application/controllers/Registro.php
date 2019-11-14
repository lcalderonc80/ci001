<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array("menu", "url"));
	 
		$this->load->model("Usuarios", "usu");
	}

   public function index()
   {
	   $query = $this->db->get('usuarios');
	   var_dump($query->result());
	   $datos["menu"] = main_menu();

	    

	   $this->load->view('registro', $datos);
   }

   public function guardar()
   {
	    
	   $datos = array(
		   "usuario" => "test5",
		   "password" => "test5",
		   "rol_id" => "1",
		   "email" => "test5@email.com"
	   );

	   $this->usu->crear($datos);

	   
   }
 
}
