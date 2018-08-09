
<?php echo validation_errors() ?>


<?php if ($datos): ?>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($datos->result() as $peli): ?>
			<tr>
				<td><?= $peli->idpelicula  ?></td>
				<td><?= $peli->nombre ?></td>
				<td>
					<a href="<?= current_url().'/edit/'.$peli->idpelicula ?>">
					editar
					</a>
				</td>

				<td>
					<a href="<?= current_url().'/delete/'.$peli->idpelicula ?>">
					eliminar
					</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	
<?php endif ?>