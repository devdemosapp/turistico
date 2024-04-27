<?php

require_once "../../controllers/gestorMensajes.php";
require_once "../../models/gestorMensajes.php";

require_once "../../controllers/gestorSuscriptores.php";
require_once "../../models/gestorSuscriptores.php";

#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#REVISAR MENSAJES
	#----------------------------------------------------------

	static public function gestorRevisionMensajesAjax($revisionMensajes){

		$datos = $revisionMensajes;

		$respuesta = MensajesController::mensajesRevisadosController($datos);

		echo $respuesta;

	}

	#REVISAR SUSCRIPTORES
	#----------------------------------------------------------

	static public function gestorRevisionSuscriptoresAjax($revisionSuscriptores){

		$datos = $revisionSuscriptores;

		$respuesta = SuscriptoresController::suscriptoresRevisadosController($datos);

		echo $respuesta;

	}

}

#OBJETOS
#-----------------------------------------------------------
if(isset($_POST["revisionMensajes"])){

	$a = new Ajax();
	Ajax:: gestorRevisionMensajesAjax($_POST["revisionMensajes"]);

}

if(isset($_POST["revisionSuscriptores"])){

	$b = new Ajax();
	Ajax:: gestorRevisionSuscriptoresAjax($_POST["revisionSuscriptores"]);

}
