<?php
	$nombre = array(
		'name'        => 'nombre',
		'id'          => 'nombre',
		'required'    => NULL,
		);
	$cuit = array(
		'name'        => 'cuit',
		'id'          => 'cuit',
		'required'    => NULL,
		);

	$cantidad = array(
		'name'        => 'cantidad',
		'id'          => 'cantidad',
		'required'    => NULL,
		);



?>

<section class="contenido">

	<section>
	<? echo form_fieldset('Estado');

		echo "Dia: " . $fecha_actual ;
		echo form_fieldset_close();
	?>
	</section>


	<section>
		<?= form_open("home/nuevo_graba"); ?>
		<?=  form_fieldset('Nuevo Turno'); ?>

		<div class="flota">
			<?= form_label('Razón social: ', 'nombre');?>
			<?= form_input($nombre);?>
		</div>

		<div class="flota">
			<?= form_label('CUIT: ', 'cuit'); ?>
			<?= form_input($cuit);?>
		</div>

		<div class="clear flota">
			<?= form_label('Cantidad: ', 'cantidad'); ?>
			<?= form_input($cantidad);?>
		</div>

		<div class="flota">
			<?= select_tipo('')?>
		</div>

		<div class="clear">
			<?= form_submit('', 'Cargar');?>
		</div>

		<?= form_fieldset_close(); ?>
		<?= form_close(); ?>
		</section>





</section>