<?= form_open('/pelicula/recibirdatos') ?>
<?php
	$nombre = [
		'name' => 'nombre',
		'placeholder' => 'escribe el nombre de la pelicula'
    ];
?>
<?= form_label('Nombre: ','nombre')  ?>
<?= form_input($nombre) ?>

<br>
<?= form_submit('','agregar') ?>
<?= form_close() ?>