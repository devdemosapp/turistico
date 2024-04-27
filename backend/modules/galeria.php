<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";

?>
<!--=====================================
GALERIA ADMINISTRABLE          
======================================-->

<div id="galeria" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>

<p><span class="fa fa-arrow-down"></span>  (Tamaño recomendado: 1024px * 768px, peso permitido: 2Mb)</p>
	
<div class='col-md-12'>
		<form method="post">

			<input type="file" id="subirImagenGaleria" name="image" required>

		</form>
	</div>
	
<hr>

<hr>
	<ul id="lightbox">

		<?php

		$slide = new GestorGaleria();
		$slide -> mostrarImagenVistaController();

		?>

	</ul>

	<button id="guardarGaleria" class="btn btn-primary pull-right" style="margin:10px 30px; display:none">Guardar Orden Imágenes</button>

</div>

<!--====  Fin de GALERIA ADMINISTRABLE  ====-->
