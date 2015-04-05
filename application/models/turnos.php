<?php

class Turnos extends CI_Model {

	public function __construct(){
		parent::__construct();
	}



	public function consulta($fecha_actual) {
		$this->db->where("FECHA = $fecha_actual AND estado = 'pen'");
		$this->db->order_by("orden");
		$consulta = $this->db->get('turnos');

		if ($consulta->num_rows() > 0)  return $consulta->result();
		else  return 'No';
	}



	public function genera_orden($fecha_actual){
		$this->db->where("FECHA = $fecha_actual");
		$this->db->select_max('orden', 'maximo');
		$consulta = $this->db->get('turnos');

		if ($consulta->num_rows() > 0)  return $consulta->row();
		else  return 'No';
	}


	public function nuevo($valor){
		$data = array(
			'razon'		=> $valor['nombre'],
			'cuit'		=> $valor['cuit'],
			'cantidad'	=> $valor['cantidad'],
			'tipo'		=> $valor['tipo'],
			'estado'	=> 'pen',
			'fecha'		=> date("Y-m-d"),
			'orden'		=> $valor['orden'],
			);

		$this->db->insert('turnos', $data);
	}



}