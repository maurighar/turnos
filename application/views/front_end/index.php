<section class="contenido">

<table id="consulta_turnos">
	<thead>
		<tr>
			<th>Orden</th>
			<th>CUIT</th>
			<th>Empresa</th>
			<th>..</th>
			<th>..</th>
		</tr>
	</thead>
	<tbody>
		<? foreach ($registros as $item): ?>
			<tr>
				<td> <?= $item->orden ?> </td>
				<td> <?= $item->cuit ?> </td>
				<td> <?= $item->razon ?> </td>
				<td> <a href="<?= BASE_URL. 'home/llamar/'. $item->id;?>">Llamar</a> </td>
				<td> <a href="<?= BASE_URL. 'home/editar/'. $item->id;?>">Editar</a> </td>
			</tr>
		<? endforeach; ?>
	</tbody>
	<tfoot>
		<td align=right colspan="5" rowspan="1">
		Desarrollado por Mauricio A. Ghilardi
		</td>
	</tfoot>
</table>

</section>