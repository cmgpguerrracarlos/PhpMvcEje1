<?php

require_once 'sucursal.php';

echo "Inicio: <br>";
$s = new Sucursal();

$arr = $s->Listar();

foreach($arr as $r){
	echo $r->cod . " - " . $r->dir . " - " . $r->ciudad . " - " . $r->dpto . "<br>";
}


$arr2 = $s->Obtener(1);
$arr3 = $s->Obtener(2);
$arr4 = $s->Obtener(3);

echo "<br>".$arr2[0]->cod . " - " . $arr2[0]->dir . " - " . $arr2[0]->ciudad . " - " . $arr2[0]->dpto . "<br>";
echo "<br>".$arr3[0]->cod . " - " . $arr3[0]->dir . " - " . $arr3[0]->ciudad . " - " . $arr3[0]->dpto . "<br>";
echo "<br>".$arr4[0]->cod . " - " . $arr4[0]->dir . " - " . $arr4[0]->ciudad . " - " . $arr4[0]->dpto . "<br>";



?>
