<?php

require_once 'models/sucursal.php';

function PrintTable($arr){
	echo "<br>TABLA SUCURSAL<br>";
	foreach($arr as $r){
		echo $r->cod . " - " . $r->dir . " - " . $r->ciudad . " - " . $r->dpto . "<br>";
	}
}

function CreateObjSucursal($cod,$dir,$ciudad,$dpto){
	$nueva = new sucursal();
	$nueva->cod = $cod;
	$nueva->dir = $dir;
	$nueva->ciudad = $ciudad;
	$nueva->dpto = $dpto;
	return $nueva;
}




echo "Inicio prueba: <br>";
$s = new Sucursal();
$arr = $s->SelectAll();
PrintTable($arr);
//$nueva = CreateObjSucursal(8,"Lorenzo Carneli 333", "Montevideo", "Montevideo");
//$s->Insert($nueva);
//PrintTable();
?>
