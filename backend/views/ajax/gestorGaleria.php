<?php

require_once "../../models/gestorGaleria.php";
require_once "../../controllers/gestorGaleria.php";

#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN DE LA GALERIA
	#----------------------------------------------------------

	static public function gestorGaleriaAjax($imagenTemporal){

		$datos = $imagenTemporal;

		$respuesta = GestorGaleria::mostrarImagenController($datos);

		echo $respuesta;

	}

	#ELIMINAR ITEM GALERIA
	#----------------------------------------------------------


	static public function eliminarGaleriaAjax($idGaleria,$rutaGaleria){

		$datos = array("idGaleria" => $idGaleria, 
					   "rutaGaleria" => $rutaGaleria);

		$respuesta = GestorGaleria::eliminarGaleriaController($datos);

		echo $respuesta;

	}

	#ACTUALIZAR ORDEN
	#---------------------------------------------

	static public function actualizarOrdenAjax($actualizarOrdenGaleria,$actualizarOrdenItem){
	
		$datos = array("ordenGaleria" => $actualizarOrdenGaleria,
			           "ordenItem" => $actualizarOrdenItem);

		$respuesta = GestorGaleria::actualizarOrdenController($datos);

		echo $respuesta;

	}

}

#OBJETOS
#-----------------------------------------------------------
if(isset($_FILES["imagen"]["tmp_name"])){

	$a = new Ajax();
	Ajax:: gestorGaleriaAjax($_FILES["imagen"]["tmp_name"]);

}

if(isset($_POST["idGaleria"])){

	$b = new Ajax();
	Ajax:: eliminarGaleriaAjax($_POST["idGaleria"],$_POST["rutaGaleria"]);	

}

if(isset($_POST["actualizarOrdenGaleria"])){

	$c = new Ajax();
	Ajax::actualizarOrdenAjax($_POST["actualizarOrdenGaleria"],$_POST["actualizarOrdenItem"]);

}