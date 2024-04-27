<?php

require_once "backend/models/conexion.php";

class GaleriaModels{

	static public function seleccionarGaleriaModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT ruta FROM $tabla ORDER BY orden ASC");
	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}
}