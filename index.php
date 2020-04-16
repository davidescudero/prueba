

<?php
$server = 'localhost';
$user = 'root';
$pass = 'root';
$bd = 'USA';
$mysql = new mysqli($server,$user,$pass,$bd);

$resultados = $mysql->query('select * from usuarios');

foreach($resultados as $r){
	print_r($r["cedula"]."<br>");
	print_r($r["nombre"]."<br>");
	print_r($r["apellidos"]."<br>");
	print_r($r["edad"]."<br><br><br><br>");
}
?>
