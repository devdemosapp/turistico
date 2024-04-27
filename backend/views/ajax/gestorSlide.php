<?php

require_once "../../models/gestorSlide.php";
require_once "../../controllers/gestorSlide.php";

#CLASE Y MÉTODOS
#-------------------------------------------------------------

class Ajax{

	#SUBIR LA IMAGEN DEL SLIDE
	#----------------------------------------------------------
	
	static public function gestorSlideAjax($nombreImagen,$imagenTemporal){

		$datos = array("nombreImagen"=>$nombreImagen,
			           "imagenTemporal"=>$imagenTemporal);

		$respuesta = GestorSlide::mostrarImagenController($datos);

		echo $respuesta;

	}

	#ELIMINAR ITEM SLIDE
	#----------------------------------------------------------

	static public function eliminarSlideAjax($idSlide,$rutaSlide){

		$datos = array("idSlide" => $idSlide, 
			           "rutaSlide" => $rutaSlide);

		$respuesta = GestorSlide::eliminarSlideController($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ITEM SLIDE
	#----------------------------------------------------------

	static public function actualizarSlideAjax($enviarId,$enviarTitulo,$enviarDescripcion){

		$datos = array("enviarId" => $enviarId, 
			           "enviarTitulo" => $enviarTitulo,
			           "enviarDescripcion" => $enviarDescripcion);

		$respuesta = GestorSlide::actualizarSlideController($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN
	#---------------------------------------------
	
	static public function actualizarOrdenAjax($actualizarOrdenSlide,$actualizarOrdenItem){

		$datos = array("ordenSlide" => $actualizarOrdenSlide,
			           "ordenItem" => $actualizarOrdenItem);

		$respuesta = GestorSlide::actualizarOrdenController($datos);

		echo $respuesta;

	}

}

#OBJETOS
#-----------------------------------------------------------
if(isset($_FILES["imagen"]["name"])){

	$a = new Ajax();
	Ajax::gestorSlideAjax($_FILES["imagen"]["name"],$_FILES["imagen"]["tmp_name"]);

}

if(isset($_POST["idSlide"])){

	$b = new Ajax();
	Ajax::eliminarSlideAjax($_POST["idSlide"],$_POST["rutaSlide"]);	

}

if(isset($_POST["enviarId"])){

	$c = new Ajax();
	Ajax::actualizarSlideAjax($_POST["enviarId"],$_POST["enviarTitulo"],$_POST["enviarDescripcion"]);	

}

if(isset($_POST["actualizarOrdenSlide"])){

	$d = new Ajax();
	Ajax::actualizarOrdenAjax($_POST["actualizarOrdenSlide"],$_POST["actualizarOrdenItem"]);

}
