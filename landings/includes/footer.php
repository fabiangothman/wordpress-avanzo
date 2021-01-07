<footer class="bgcolor-azulavanzo text-whiteavanzo p-4">
  <div class="row m-0">
    <div class="col-12 col-md-6">
      <div class="text-center">
        <a href="#" target="_blank"><img src="../includes/images/logo_avanzo.png" class="w-100 mw-276"></a>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="row m-0 text-center">

        <div class="col-12 col-md-4 py-4 py-md-0">
          <div class="">
            <h6><p class="font-weight-bold">Síguenos:</p></h6>
            <div class="row m-0">
              <div class="col-4 p-2">
                <a href="#" target="_blank"><img src="../includes/images/logo_facebook.png" class="w-100 mw-37"></a>
              </div>
              <div class="col-4 p-2">
                <a href="#" target="_blank"><img src="../includes/images/logo_instagram.png" class="w-100 mw-37"></a>
              </div>
              <div class="col-4 p-2">
                <a href="#" target="_blank"><img src="../includes/images/logo_linkedin.png" class="w-100 mw-37"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 py-3 py-md-0">
          <div class="">
            <h6>
              <p class="font-weight-bold">Sobre Avanzo:</p>
              <p class="m-0">Acerca de nosotros</p>
              <p class="m-0">En solo 3 pasos</p>
            </h6>
          </div>
        </div>

        <div class="col-12 col-md-4 py-3 py-md-0">
          <div class="">
            <h6>
              <p class="m-0 font-weight-bold">Contacto:</p>
              <p class="">031-4824824</p>

              <p class="m-0 font-weight-bold">Correo:</p>
              <p class="">sac@avanzo.co</p>
            </h6>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../includes/jquery-3.2.1.min.js"></script>
<script src="../includes/popper.min.js"></script>
<script src="../includes/bootstrap.min.js"></script>
<script src="../includes/holder.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
        $('.carrusel1').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            dots: true,
            autoplayHoverPause: false,
            autoplayTimeout:4000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
        $('.carrusel2').owlCarousel({
            items: 2,
            loop: true,
            margin: 10,
            autoplay: true,
            dots: false,
            autoplayHoverPause: false,
            autoplayTimeout:4000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
        $('.carrusel3').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            dots: false,
            autoplayHoverPause: false,
            autoplayTimeout:4000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass:true,
            responsive:{
              0:{
                  items:2
              },
              700:{
                  items:4
              }
            }
        });
    });
</script>
<script src="../includes/slider/owl/js/owl.carousel.js"></script>

</body>
</html>