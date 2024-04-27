<?php

class EnlacesModels{

	static public function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "ingreso" ||
		   $enlaces == "slide" ||
		   $enlaces == "galeria" ||
		   $enlaces == "videos" ||
		   $enlaces == "mensajes" ||
		   $enlaces == "perfil" ||
		   $enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/ingreso.php";
		}

		else{
			$module = "views/modules/ingreso.php";		
		}

		return $module;

	}


}