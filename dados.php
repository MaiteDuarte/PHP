<?
/*Caso Práctico 15: Juego Dados PHP

Realizar una web en PHP donde se generen dos valores al azar correspondientes a los valores de un dado, y el sistema compruebe 
quien el es ganador y en ese caso muestre dicho mensaje por pantalla.El Caso Práctico 15: Juego Dados PHP debe estar documentado 
internamente donde se incluya el nombre del autor, 
y el resto de explicaciones.*/

/*Usamos el rand para generar dos numeros aleatorios*/
$jugador1=rand(1, 6);

$jugador2=rand(1, 6);

/*Mostramos por pantalla los valores de los numeros aleatorios e indicamos el jugador al que pertenece*/
print"<center>";
print"<table border=!>";
print"<td>jugador1<h1>$jugador1</h1></td>";


print"<td>Jugador2<h1>$jugador2</h1></td>";
print"</table>";
print"</center>";

/*Hacemos los if y else. Tendremos un if anidado*/
if ($jugador1>$jugador2){
	
	echo "Ha ganado el jugador 1";
}else{
	if($jugador1==$jugador2){
		echo "EMPATE";
	}else{
		echo"Ha ganado el jugador 2";
	}

}

?>

