<?php echo validation_errors() ?>


<?= form_open('pelicula/store') ?>
<?= form_label('NombrePeli: ','nombre')  ?>
	<?php foreach ($peli->result() as $p): ?>
		<?= form_hidden(['idpelicula'=>$p->idpelicula])  ?>
		<?= form_input(['name' => 'nombre','value'=>$p->nombre]) ?>
	<?php endforeach ?>
<br>
<?= form_submit('','editar')  ?>
<?= form_close() ?>