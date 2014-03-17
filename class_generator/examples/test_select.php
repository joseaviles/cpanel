

<?php

// SAMPLE FOR METHOD SELECT()

include_once("../generated_classes/class.usuarios.php");



$usuarios  = new usuarios();




$usuarios->select(12);

$v = $usuarios->getnombre();

print "$v";



print "selected record $usuarios->id";

?>