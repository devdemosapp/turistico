<!--=====================================
 CABEZOTE             
======================================-->

<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

	

	</div>

	<div id="time" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		
		
		

	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
		
		<img src="<?php echo $_SESSION["photo"];?>" class="img-circle">
		
		<p id="member"><?php echo $_SESSION["usuario"];?> <span class="fa fa-chevron-down"></span>
			<br>
			<ol id="admin">
				
				<li><a href="salir"><span class="fa fa-times"></span>Salir</a></li>
			</ol>

		</p>

	</div>

</div>

<!--====  Fin de CABEZOTE  ====-->

<script>

/*=============================================
RELOJ DINÁMICO        
=============================================*/

function reloj(){
	
	hora = $("#hora").attr("hora");
	minutos = $("#hora").attr("minutos");
	segundos = $("#hora").attr("segundos");
	meridiano = $("#hora").attr("meridiano");
	
	setInterval(function(){

		if(segundos == 59){

			segundos = "0" + 0;

			minutos = Number(minutos) + 1;

		}

		else{

			segundos++;

			if(segundos > 0 && segundos < 10){

				segundos = "0" + segundos++;

			}

		}

		if(minutos > 59){

			window.location.reload();

		}
		
		$("#hora").html(hora+":"+minutos+":"+segundos+" "+meridiano)

	},1000);

}

reloj();

</script>