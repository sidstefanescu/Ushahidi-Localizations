<?php
	$lang = array(
	'category_color' => array(
		'length' => 'Câmpul Culoare trebuie să conţină 6 caractere.',
		'required' => 'Câmpul Culoare este necesar.',
	),
	'category_description' => array(
		'required' => 'Câmpul Descriere este necesar.',
	),
	'category_image' => array(
		'size' => 'Dimensiunea imaginilor este limitată la 50KB.',
		'type' => 'Câmpul Imagine nu pare să conţină o imagine validă. Formatele acceptate sunt .JPG, .PNG şi .GIF.',
		'valid' => 'Câmpul Imagine nu pare să conţină un fişier valid',
	),
	'category_title' => array(
		'length' => 'Câmpul Titlu trebuie să conţină minim 3 şi nu mai mult de 80 de caractere.',
		'required' => 'The title field is required.',
	),
	'parent_id' => array(
		'exists' => 'Categoria sursă nu există.',
		'numeric' => 'Câmpul categoriei sursă treuie să fie numeric.',
		'required' => 'Câmpul Categorie Sursă este necesar.',
		'same' => 'Categoria şi categoria sursă nu pot fi identice.',
	));
?>