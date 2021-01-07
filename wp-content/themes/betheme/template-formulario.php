<?php
/**
 * Template Name: Plantilla de Formulario
 *
 * @package Avanzo.co
 * @author Fabián Murillo
 * @link fabianmurillo.01@gmail.com
 */

get_header();
?>

<div id="Content">
	<div id="frmulario_sctin">
		<div class="cont_log">
			<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
		</div>
	</div>

</div>

<?php get_footer();
