<?php

/*
Crea un objeto select con los valores de tipo de tramite
y marca el que esta cargado en la BD
*/
function select_tipo($seleccionado) {
	$options = array(
		''    => '- - -',
		'Alt' => 'Alta',
		'Baj' => 'Bajas',
		'Rev' => 'Revalidas',
		'Mod' => 'Modificaciones',
		'Rei' => 'Reimpresiones',
		'Var' => 'Varios'
	);

	echo form_label('Tipo de tramite: ', 'tipo');
	echo form_dropdown('tipo', $options, $seleccionado);
}

/*
Crea un objeto select con los valores de estado de tramite
y marca el que esta cargado en la BD
*/
function select_estado($seleccionado) {
	$options = array(
		''    => '- - -',
		'pen' => 'Pendiente',
		'atn' => 'Atendiendo',
		'pos' => 'Postergado',
		'ter' => 'Terminado'
	);

	echo form_dropdown('estado', $options, $seleccionado);
}

?>