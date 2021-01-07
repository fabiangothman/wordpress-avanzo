<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */

$back_to_top_class = mfn_opts_get('back-top-top');

if ($back_to_top_class == 'hide') {
	$back_to_top_position = false;
} elseif (strpos($back_to_top_class, 'sticky') !== false) {
	$back_to_top_position = 'body';
} elseif (mfn_opts_get('footer-hide') == 1) {
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}
?>

<?php do_action('mfn_hook_content_after'); ?>

<?php if ('hide' != mfn_opts_get('footer-style')): ?>

	<script type="text/javascript">
		/*General variable for responsive width*/
		var widthLimit = <?php echo _CUSTOM_RSPNV_SIZE_; ?>;

		jQuery(document).ready(function(){
		    resizePage(widthLimit);

		    jQuery(window).resize(function() {
				resizePage(widthLimit);
			});


			if(jQuery(document).width()>=widthLimit){
				jQuery(".stky_center").slick({
			        dots: true,
			        infinite: true,
			        centerMode: true,
			        rows:1,
			        slidesToShow: 4,
			        slidesToScroll: 2
			      });
			}else{			
				jQuery(".stky_center").slick({
			        dots: true,
			        infinite: true,
			        centerMode: true,
			        rows:1,
			        slidesToShow: 3,
			        slidesToScroll: 1
			      });
			}

			jQuery(".top_bar_right_wrapper .action_button").on("click", function() {
				jQuery("#login_sctin .trigger-btn").trigger("click");
			});


			//Buscador del template de clientes
			jQuery(".cont_search .buscador").on("keyup", function() {
				var value = jQuery(this).val().toLowerCase();
				jQuery.each(jQuery(".cont_logos .cuadricula .name p"), function(){
					if(jQuery(this).html().toLowerCase().indexOf(value) > -1){
						jQuery(this).closest(".cuadrad").show();
					}else{
						jQuery(this).closest(".cuadrad").hide();
					}

				});
			});

		});

		function resizePage(widthLimit){
			if(jQuery(document).width()>=widthLimit){
				//Personas template
				jQuery("#ppl_sctin.norespnsv").show();
				jQuery("#ppl_sctin.respnsv").hide();
				//Quienes somos template
				jQuery("#qunsoms_sctin.norespnsv").show();
				jQuery("#qunsoms_sctin.respnsv").hide();
				//Empresas template
				jQuery("#emprsas_sctin.norespnsv").show();
				jQuery("#emprsas_sctin.respnsv").hide();
				//Clientes template
				jQuery("#clnts_sctin .norespnsv").show();
				jQuery("#clnts_sctin .respnsv").hide();

				//Footer template
				jQuery("#footr_sctin.norespnsv").show();
				jQuery("#footr_sctin.respnsv").hide();
			}else{
				//Personas template				
				jQuery("#ppl_sctin.respnsv").show();
				jQuery("#ppl_sctin.norespnsv").hide();
				//Quienes somos template
				jQuery("#qunsoms_sctin.respnsv").show();
				jQuery("#qunsoms_sctin.norespnsv").hide();
				//Empresas template
				jQuery("#emprsas_sctin.respnsv").show();
				jQuery("#emprsas_sctin.norespnsv").hide();
				//Empresas template
				jQuery("#clnts_sctin .respnsv").show();
				jQuery("#clnts_sctin .norespnsv").hide();

				//Footer template
				jQuery("#footr_sctin.respnsv").show();
				jQuery("#footr_sctin.norespnsv").hide();
			}
		}

		function go_central_form(){
			//window.location.href = "<?php echo get_site_url(null, 'formulario'); ?>";
			window.location.href = "http://3.133.128.42:3000/";
		}

	</script>

	<footer id="Footer" class="clearfix">

		<?php if ($footer_call_to_action = mfn_opts_get('footer-call-to-action')): ?>
		<div class="footer_action">
			<div class="container">
				<div class="column one column_column">
					<?php echo do_shortcode($footer_call_to_action); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php
			$sidebars_count = 0;
			for ($i = 1; $i <= 5; $i++) {
				if (is_active_sidebar('footer-area-'. $i)) {
					$sidebars_count++;
				}
			}

			if ($sidebars_count > 0) {

				echo '<div class="widgets_wrapper">';
					echo '<div class="container">';

						if ($footer_layout = mfn_opts_get('footer-layout')) {

							// Theme Options

							$footer_layout 	= explode(';', $footer_layout);
							$footer_cols = $footer_layout[0];

							for ($i = 1; $i <= $footer_cols; $i++) {
								if (is_active_sidebar('footer-area-'. $i)) {
									echo '<div class="column '. esc_attr($footer_layout[$i]) .'">';
										dynamic_sidebar('footer-area-'. $i);
									echo '</div>';
								}
							}

						} else {

							// default with equal width

							$sidebar_class = '';
							switch ($sidebars_count) {
								case 2: $sidebar_class = 'one-second'; break;
								case 3: $sidebar_class = 'one-third'; break;
								case 4: $sidebar_class = 'one-fourth'; break;
								case 5: $sidebar_class = 'one-fifth'; break;
								default: $sidebar_class = 'one';
							}

							for ($i = 1; $i <= 5; $i++) {
								if (is_active_sidebar('footer-area-'. $i)) {
									echo '<div class="column '. esc_attr($sidebar_class) .'">';
										dynamic_sidebar('footer-area-'. $i);
									echo '</div>';
								}
							}

						}

					echo '</div>';
				echo '</div>';
			}
		?>

		<?php if (mfn_opts_get('footer-hide') != 1): ?>

			<div id="cont_ftr">
				<?php
					if ($back_to_top_position == 'copyright') {
						echo '<a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>';
					}
				?>
				<div id="footr_sctin" class="norespnsv">
					<div class="fondo">
						<div class="cont_cols">
							<div class="tcol col1">
								<img src="<?php echo get_theme_file_uri('/images/avanzo.co/logo_blancos.png'); ?>" width="200">
							</div>
							<div class="tcol col2">
								<div class="cont_sup">
									<div class="txttitle">
										<div class="txt">Siguenos:</div>
									</div>
								</div>
								<div class="spacer-10"></div>
								<div class="cont_inf">
									<div class="logos">
										<div class="logo logo1"><a href="https://facebook.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/facebook.png'); ?>" ></a></div>
									<div class="logo logo2"><a href="https://instagram.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/instagram.png'); ?>" ></a></div>
									<div class="logo logo2"><a href="https://linkedin.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/linkedin.png'); ?>" ></a></div>
									</div>
								</div>
							</div>
							<div class="tcol col3">
								<div class="cont_sup">
									<div class="txttitle">
										<div class="txt">Sobre Avanzo:</div>
									</div>
								</div>
								<div class="spacer-10"></div>
								<div class="cont_inf">
									<div class="txtnormal">
										<div class="txt">Acerca de nosotros</div>
										<div class="txt">En solo 3 pasos</div>
									</div>
								</div>
							</div>
							<div class="tcol col4">
								<div class="cont_sup">
									<div class="txttitle">
										<div class="txt">Contacto:</div>
									</div>
								</div>
								<div class="spacer-10"></div>
								<div class="cont_inf">
									<div class="txtnormal">
										<div class="txt">Cll xxx - xxxxx</div>
									</div>
									<div class="txttitle">
										<div class="txt">Correo:</div>
									</div>
									<div class="txtnormal">
										<div class="txt"><a class="lnk_mail" href="mailto:avanzo@avanzo.co">avanzo@avanzo.co</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="footr_sctin" class="respnsv">
					<div class="filas">
						<div class="fla fla1">
							<img src="<?php echo get_theme_file_uri('/images/avanzo.co/logo_blancos.png'); ?>">
						</div>
						<div class="fla fla2">
							<div class="cont_sup">
								<div class="txttitle">
									<div class="txt">Siguenos:</div>
								</div>
							</div>
							<div class="cont_inf">
								<div class="logos">
									<div class="logo logo1"><a href="https://facebook.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/facebook.png'); ?>" ></a></div>
									<div class="logo logo2"><a href="https://instagram.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/instagram.png'); ?>" ></a></div>
									<div class="logo logo2"><a href="https://linkedin.com" target="_blank"><img src="<?php echo get_theme_file_uri('/images/avanzo.co/linkedin.png'); ?>" ></a></div>
								</div>
							</div>
						</div>
						<div class="fla fla3">
							<div class="cont_sup">
								<div class="txttitle">
									<div class="txt">Sobre Avanzo:</div>
								</div>
							</div>
							<div class="cont_inf">
								<div class="txt">Acerca de nosotros</div>
								<div class="txt">En solo 3 pasos</div>
							</div>
						</div>
						<div class="fla fla4">
							<div class="cont_sup">
								<div class="txttitle">
									<div class="txt">Contacto:</div>
								</div>
							</div>
							<div class="cont_inf">
								<div class="txt">Cll xxx - xxxxx</div>
							</div>
						</div>
						<div class="fla fla5">
							<div class="cont_sup">
								<div class="txttitle">
									<div class="txt">Correo:</div>
								</div>
							</div>
							<div class="cont_inf">
								<div class="txt"><a class="lnk_mail" href="mailto:avanzo@avanzo.co">avanzo@avanzo.co</a></div>
							</div>
						</div>
					</div>
					<div class="spacer-30"></div>
				</div>
			</div>

		<?php endif; ?>

		<?php
			if ($back_to_top_position == 'footer') {
				echo '<a id="back_to_top" class="button button_js in_footer" href=""><i class="icon-up-open-big"></i></a>';
			}
		?>

	</footer>
<?php endif; ?>

</div>

<?php
	// side slide menu
	if (mfn_opts_get('responsive-mobile-menu')) {
		get_template_part('includes/header', 'side-slide');
	}
?>

<?php
	if ($back_to_top_position == 'body') {
		echo '<a id="back_to_top" class="button button_js '. esc_attr($back_to_top_class) .'" href=""><i class="icon-up-open-big"></i></a>';
	}
?>

<?php if (mfn_opts_get('popup-contact-form')): ?>
	<div id="popup_contact">
		<a class="button button_js" href="#"><i class="<?php echo esc_attr(mfn_opts_get('popup-contact-form-icon', 'icon-mail-line')); ?>"></i></a>
		<div class="popup_contact_wrapper">
			<?php echo do_shortcode(mfn_opts_get('popup-contact-form')); ?>
			<span class="arrow"></span>
		</div>
	</div>
<?php endif; ?>

<?php do_action('mfn_hook_bottom'); ?>

<?php wp_footer(); ?>
<script type="text/javascript" src="https://avanzo.co/wp-content/themes/betheme/js/slick/slick.js"></script>
</body>
</html>
