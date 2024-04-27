<?php

require_once "../../models/gestorVideos.php";
require_once "../../controllers/gestorVideos.php";

#CLASE Y MÉTODOS
#-------------------------------------------------------------

class Ajax{

	#SUBIR EL VIDEO
	#----------------------------------------------------------

	static public function gestorVideoAjax($videoTemporal){

		$datos = $videoTemporal;

		$respuesta = GestorVideos::mostrarVideoController($datos);

		echo $respuesta;

	}

	#ELIMINAR ITEM VIDEO
	#----------------------------------------------------------

	static public function eliminarVideoAjax($idVideo,$rutaVideo){

		$datos = array("idVideo" => $idVideo, 
			           "rutaVideo" => $rutaVideo);	

		$respuesta = GestorVideos::eliminarVideoController($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN
	#---------------------------------------------

	static public function actualizarOrdenAjax($actualizarOrdenVideo, $actualizarOrdenItem){

		$datos = array("ordenVideo" => $actualizarOrdenVideo,
			           "ordenItem" => $actualizarOrdenItem);

		$respuesta = GestorVideos::actualizarOrdenController($datos);

		echo $respuesta;
		
	}

}

#OBJETOS
#-----------------------------------------------------------
if(isset($_FILES["video"]["tmp_name"])){

	$a = new Ajax();
	Ajax:: gestorVideoAjax($_FILES["video"]["tmp_name"]);

}

if(isset($_POST["idVideo"])){

	$b = new Ajax();
	Ajax:: eliminarVideoAjax($_POST["idVideo"],$_POST["rutaVideo"]);	

}

if(isset($_POST["actualizarOrdenVideo"])){

	$c = new Ajax();
	Ajax:: actualizarOrdenAjax($_POST["actualizarOrdenVideo"],$_POST["actualizarOrdenItem"]);

}