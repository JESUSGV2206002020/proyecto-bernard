<?php 
session_start();
require('controlado/funciones.php');
require('clases/clases.php');
verificar_session();

require('header.php');

if(isset($_GET['CodPost']))
{
	notificaciones::vistas($_GET['CodPost']);
	$post = post::mostrar_por_codigo_post($_GET['CodPost']);
	require('publicacion.php');
}




 ?>



 </body>
 </html>