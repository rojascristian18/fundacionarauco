<?php 


/**
 * Verificar que éste programa esté asignado al profesor
 */

if (esProfesor() && isset($_GET['pro'])) {
	


}else{
	echo "No se ha logeado - Programa ID: " . $_GET['pro'];
}

?>