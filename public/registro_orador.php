<?php
    $title = "Registro Orador";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  	<?php require_once 'include/head_meta.inc.php'; ?>
  </head>

  <body>

    <?php require_once 'include/navbar.inc.php'; ?>

	<div id="header">
	  <div class="container">
	    <div class="row">
		  <div class="span12">
		    <h1>Registrate como orador</h1>
		  </div>
		</div>
	  </div>
	</div>

	<div id="content">
	  <div class="container">
	    <div class="row">
	  	  <div class="span4">
	  	  	<h2>¡Llamado a speakers!</h2>
	  	  	<p>No importa quien seas, nos importa lo que tenés para decir.</p>
			<p>Con 30 minutos para presentar tus ideas, este evento será muy intenso y dinámico. ¡Preparate para mostrar lo que más te interesa!</p>
			<p>Enviá tu paper postulándote como speaker para participar de la primera tech.Meetup. Contanos quién sos, qué hacés y contanos la importancia de tu ponencia.</p>
			<p>Todos tienen la oportunidad de presentarse por igual, porque entendemos que sin ideas nuevas no hay desarrollo.</p>
			<p>Las charlas tendrán como hilo conductor:</p>
			<p>
		  	  	<ul>
                    <li>
                       Proceso de desarrollo
                        <ul>
                            <li>Trabajo en equipo / scrum / agile</li>
                            <li>Integración continua</li>
                            <li>Review</li>
                            <li>Continuous delivery</li>
                            <li>Testing / QA</li>
                        </ul>
                    </li>
					<li>
                        Infraestructura y producción
                        <ul>
                            <li>Monitoreo</li>
                            <li>Escalamiento y redundancia</li>
                            <li>Control de cambios / versionamiento</li>
                            <li>Deployment</li>
                        </ul>
                    </li>
                    <li>
                        Mesas de discusión
                        <ul>
                            <li>Trabajo remoto</li>
                            <li>Experiencias reales de todo lo anterior junto!</li>
                        </ul>
                    </li>
				</ul>
			</p>

			<p>Mandanos tu paper completando este formulario.</p>
	  	  </div>
	  	  <div class="span7 offset1">
		  	<iframe
		  		src="https://docs.google.com/a/meetup.uy/spreadsheet/embeddedform?formkey=dDA0RFMyTUw1aEZBZWNPTWtUV0U3OHc6MQ"
		  		width="460"
		  		height="1024"
		  		frameborder="0"
		  		marginheight="0"
		  		marginwidth="0">
		  			Cargando...
		  	</iframe>
	  	  </div>
		</div>

	  </div>
	</div>

	<?php require_once 'include/footer.inc.php'; ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
	<script src="/js/script.js"></script>

  </body>
</html>