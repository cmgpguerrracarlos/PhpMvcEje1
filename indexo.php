<?php

require_once 'models/sucursal.php';

echo "Inicio prueba: <br>";
$s = new Sucursal();


$arr2 = $s->SelectId(1);
$arr3 = $s->SelectId(2);
$arr4 = $s->SelectId(3);

echo "<br>".$arr2[0]->cod . " - " . $arr2[0]->dir . " - " . $arr2[0]->ciudad . " - " . $arr2[0]->dpto . "<br>";
echo "<br>".$arr3[0]->cod . " - " . $arr3[0]->dir . " - " . $arr3[0]->ciudad . " - " . $arr3[0]->dpto . "<br>";
echo "<br>".$arr4[0]->cod . " - " . $arr4[0]->dir . " - " . $arr4[0]->ciudad . " - " . $arr4[0]->dpto . "<br>";

$nueva = new sucursal();
$nueva->cod = 7;
$nueva->dir = "Maurente 913";
$nueva->ciudad = "San Carlos";
$nueva->dpto = "Maldonado";
$s->Insert($nueva);

echo "<br>,;;nln;lnllllnlln<br>";
$s->SelectAll();

$arr = $s->SelectAll();

foreach($arr as $r){
	echo $r->cod . " - " . $r->dir . " - " . $r->ciudad . " - " . $r->dpto . "<br>";
}

?>
