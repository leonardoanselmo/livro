<?php 

	include_once "app.widgets/TElement.class.php";

	$html = new TElement('html');	

	$head = new TElement('head');
	$html->add($head);

	$title = new TElement('title');
	$title->add('Sport Club Internacional');
	$head->add($title);

	$body = new TElement('body');
	$body->bgcolor = '#ffffdd';
	$html->add($body);

	$center = new TElement('center');
	$body->add($center);

	$p = new TElement('p');
	$p->align = "center";
	$p->add('Sport Club Internacional');
	$center->add($p);

	$img = new TElement('img');
	$img->src = 'app.images/inter.png';
	$img->width = '112';
	$img->height = '112';
	$center->add($img);

	$hr = new TElement('hr');
	$hr->width = '150';
	$hr->align = 'center';
	$center->add($hr);

	$a = new TElement('a');
	$a->href = 'http://www.internacional.com.br';
	$a->add('Visite o site oficial');
	$center->add($a);

	$br = new TElement('br');
	$center->add($br);

	$input = new TElement('input');
	$input->type = 'button';
	$input->value = 'Clique aqui para saber ...';
	$input->onclick = "alert('Clube do povo do Rio Grande do Sul')";	
	$center->add($input);

	$html->show();

 ?>