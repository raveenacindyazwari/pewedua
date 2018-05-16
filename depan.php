<?php 
require 'app/View.php';
require 'src/View.php';

	$v= new \src\View();
	$v->render();

		echo "<br>";
	
	$x= new \app\View();
	$x->render();
?>