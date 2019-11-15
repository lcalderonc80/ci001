<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Libro", "libros");
	}

	public function index()
	{
		$datos["libros"] = $this->db->get('libros')->result();
		 
		$this->load->view('libros', $datos);
	}

	public function nuevo()
	{
		$this->load->view('nuevoForm');
	}

	public function crear()
	{
		$datos = array(
			"titulo" =>$this->input->post("titulo"),
			"isbn" =>$this->input->post("isbn"),
			"autor" =>$this->input->post("autor"),
			"cantidad" =>$this->input->post("cantidad")
		);

		$this->libros->guardar($datos);

		redirect('operacion', 'refresh');

	}

	public function eliminar($id)
	{
		$this->db->delete('libros', array('id' => $id));
		redirect('operacion', 'refresh');
	}
 
}
