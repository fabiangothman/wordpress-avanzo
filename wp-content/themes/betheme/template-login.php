<?php
/**
 * Template Name: Plantilla de Login
 *
 * @package Avanzo.co
 * @author Fabián Murillo
 * @link fabianmurillo.01@gmail.com
 */

get_header();
?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#Footer").css({"position":"fixed","width":"100%","bottom":"0"});
		//jQuery("#Footer").css("position","fixed");
	});
</script>

<div id="Content">
	<div id="login_sctin">
		<div class="cont_log">
			<form class="form-login" action="http://3.133.128.42:4000" method="POST">
				<div class="cont_inputs">
					<label>Correo</label>
					<input type="text" name="" />

					<div class="spacer-10"></div>

					<label>Contraseña</label>
					<input type="password" name="" />

					<div class="spacer-30"></div>

					<input type="submit" value="Iniciar sesión" />
				</div>
			</form>
		</div>
	</div>

</div>

<?php get_footer();
