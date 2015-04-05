<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('turnos');
		$this->load->helper('form');
		$this->load->helper('funciones');
	}

	public function index() {
		$data['contenido'] = 'index';
		$data['titulo'] = 'Turnos';
		$data['fecha_actual'] = date("Y-m-d");

		$data['registros'] = $this->turnos->consulta(date("Ymd"));

		if ($data['registros'] === "No"){
			$data['mensaje'] = 'No hay turnos para el día.';
			$data['contenido'] = 'mensaje';
		}

		$this->load->view('template',$data);

		$this->output->enable_profiler(TRUE);
	}




	public function nuevo() {
		$data['contenido'] = 'nuevo';
		$data['titulo'] = 'Turnos - Nuevo';
		$data['fecha_actual'] = date("d-m-Y");

		$this->load->view('template',$data);

		$this->output->enable_profiler(TRUE);
	}


	public function nuevo_graba() {
		$this->load->helper('url');

		$data['orden'] = $this->turnos->genera_orden(date("Ymd"));

		if ($data['orden']==='No') $nuevo_orden = 0 ;
		else $nuevo_orden = $data['orden']->maximo ;

		$datos = array(
			'nombre'		=> $this->input->post('nombre'),
			'cuit'			=> $this->input->post('cuit'),
			'cantidad'		=> $this->input->post('cantidad'),
			'tipo'			=> $this->input->post('tipo'),
			'orden'			=> ($nuevo_orden + 1),
			);




		$this->turnos->nuevo($datos);
		redirect('home/index/', 'location');
	}







	public function editar() {
		$data['contenido'] = 'nuevo';
		$data['titulo'] = 'Turnos - Nuevo';
		$data['fecha_actual'] = date("d-m-Y");

		//$this->load->view('template',$data);

		$this->output->enable_profiler(TRUE);
	}


	public function llamar() {
		$data['contenido'] = 'nuevo';
		$data['titulo'] = 'Turnos - Nuevo';
		$data['fecha_actual'] = date("d-m-Y");

		//$this->load->view('template',$data);
// Cambiar el estado del tramite
//agregar botones para cambiar el estado

		$this->output->enable_profiler(TRUE);
	}

}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */