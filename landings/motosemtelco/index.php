<?php
require_once("../../wp-config.php");

if(isset($_GET["return"]) && $_GET["return"]=="success"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Felicidades!</strong> La solicitud se ha enviado con éxito, pronto nos comunicaremos contigo.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }else if(isset($_GET["return"]) && $_GET["return"]=="error"){ ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ups!</strong> Ocurrió un error al tratar de insertar la información, por favor inténtalo nuevamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

<?php include '../includes/header.php'; ?>

<div class="py-5 px-3 text-white bg-firstimg holderjs">
    <div class="row py-5 px-3">
        <div class="col-md-6 px-0"></div>
        <div class="col-md-6 px-0 py-5 py-md-2">
            <div class="max-width-500">
                <h3 class="font-weight-normal line-height-45">
                    <span class="font-weight-bold">Emtelco</span> tiene una nueva alianza para que puedas financiar la moto de tus sueños.
                </h3>
                <h3 class="font-weight-bold text-center py-5">¡Conócela!</h3>
            </div>
        </div>
    </div>
</div>

<div class="pt-2 pt-md-4 pb-2 px-3 text-blueavanzo">
  <div class="row py-5 px-3">
      <div class="col-md-7 px-0">
          <div class="max-width-700">
              <p><span class="font-weight-bold">Emtelco fortaleció su alianza con Avanzo</span> para que puedas financiar la moto de tus sueños con grandes beneficios.</p>
              <p>Este convenio incluye los siguientes beneficios:</p>
              <div class="row py-3 px-2">
                  <div class="col-md-6 px-0">
                      <ul>
                          <li>Motos</li>
                          <li>Cascos</li>
                          <li>Kit de protección</li>
                          <li>Seguro todo riesgo</li>
                      </ul>
                  </div>
                  <div class="col-md-6 px-0">
                      <ul>
                          <li>Asistencia</li>
                          <li>Soat</li>
                          <li>Matrícula</li>
                      </ul>
                  </div>
              </div>
              <p>Recuerda que podrás financiarla a través de un descuento de <span class="font-weight-bold">nómina mensual que será desde</span>:</p>
              <h1 class="text-center mb-0"><span class="font-weight-bold">$250.000</span></h1>
              <p class="text-center text-width-12">*Aplica condiciones y restricciones</p>
              <div class="text-center overflow-hidden">
                  <a href="#" class="text-center btn btn-primary bgcolor-azulavanzo text-marinaavanzo btn-lg"><span class="font-weight-bold">¡Financia tus sueños ahora!</span></a>
              </div>                                
          </div>
      </div>
      <div class="col-md-5 px-0 text-center overflow-hidden">
          <div class="d-none d-md-block">
              <img src="images/card1.png" class="mx-auto w-auto mh-450" />
          </div>
      </div>
  </div>
</div>

<div class="py-2 px-0 px-md-3 text-blueavanzo border-bottom border-grey">
  <div class="text-center px-3">
      <h4><span class="font-weight-bold">Queremos que tengas lo mejores beneficios del mercado</span></h4>
  </div>
  <div class="row px-0 px-md-5 pt-5 pb-2 mw-1560 mx-auto">
    <div class="carrusel1 owl-carousel owl-theme">

      <div class="item">
        <div class="row m-0">
          <div class="col-md-6 px-0 ">
            <img src="images/slider1_1.png" class="mx-auto w-auto mw-100 mh-423" />
          </div>
          <div class="col-md-6 p-5 p-md-4 align-self-center">
            <div class="py-2 py-md-0">
              <div class="m-0 py-2">
                <h4>No queremos que te conformes con cualquier moto, <span class="font-weight-bold">nosotros te ofrecemos las mejores marcas</span>.</h4>
              </div>
              <div class="row m-0 py-3">
                
                <div class="col-4 col-sm-4 col-md-4 align-self-center">
                  <img src="images/logo_honda.png" class="mx-auto w-100 mw-105" />
                </div>
                <div class="col-4 col-sm-4 col-md-4 align-self-center">
                  <img src="images/logo_pulsar.png" class="mx-auto w-100 mw-105" />
                </div>
                <div class="col-4 col-sm-4 col-md-4 align-self-center">
                  <img src="images/logo_suzuki.png" class="mx-auto w-100 mw-105" />
                </div>
              </div>
              <div class="pt-4 d-none d-md-block">
                <div class="text-center overflow-hidden">
                  <a href="#" class="text-center btn btn-primary bgcolor-azulavanzo text-marinaavanzo btn-lg"><span class="font-weight-bold">Ver referencias</span></a>
                </div>
              </div>
              <div class="pt-4 d-block d-md-none">
                <div class="text-center">
                  <h6 class="mb-0">
                    <p class="text-blackavanzo mb-0">Referencias seleccionadas:</p>
                    <p class="text-blackavanzo mb-0">Honda: CB 190R / CB 125F / NEO</p>
                    <p class="text-blackavanzo mb-0">Pulsar: 180 GT / 135</p>
                    <p class="text-blackavanzo mb-0">Suzuki: Gixxer /* GN125</p>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <div class="col-md-6 px-0">
            <img src="images/slider1_2.png" class="mx-auto w-auto mw-100 mh-423" />
          </div>
          <div class="col-md-6 p-5 p-md-4 align-self-center">
            <div class="m-0 py-5 py-md-0">
              <h4 class="m-0 py-5 py-md-0"><span class="font-weight-bold">Regalo del primer cambio de aceite</span> y un precio inferior al mercado del 10% para los siguientes cambios con una de las mejores marcas de lubricantes <span class="font-weight-bold">TOTAL</span>.</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row m-0">
          <div class="col-md-6 px-0">
            <img src="images/slider1_3.png" class="mx-auto w-auto mw-100 mh-423" />
          </div>
          <div class="col-md-6 p-5 p-md-4 align-self-center">
            <div class="m-0 py-5 py-md-0">
              <h4 class="py-5 py-md-0">Tenemos para ti <span class="font-weight-bold">grandes descuentos en llantas</span> futuras de las mejores marcas mundiales.</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row m-0">
          <div class="col-md-6 px-0">
            <img src="images/slider1_4.png" class="mx-auto w-auto mw-100 mh-423" />
          </div>
          <div class="col-md-6 p-5 p-md-4 align-self-center">
            <div class="m-0 py-2 py-md-0">
              <div class="m-0 py-5 py-md-0 pb-md-3">
                <h4><span class="font-weight-bold">Tu seguridad es muy importante para nosotros</span> por tal motivo te damos un precio especial en los cascos finaciados y futuros con nuestro aliado <span class="font-weight-bold">Inducascos</span>.</h4>
              </div>
              <div class="m-0 pt-2">
                <div class="text-center overflow-hidden">
                  <a href="#" class="text-center btn btn-primary bgcolor-azulavanzo text-marinaavanzo btn-lg"><span class="font-weight-bold">Ver referencias</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row m-0">
          <div class="col-md-6 px-0">
            <img src="images/slider1_5.png" class="mx-auto w-auto mw-100 mh-423" />
          </div>
          <div class="col-md-6 p-4 p-md-4 align-self-center">
            <div class="m-0">
              <p>
                <h5 class="mb-0">Ofrecemos precios especiales en el SOAT, Seguro Todo Riesgo a través de <span class="font-weight-bold">AON y SBS</span>.</h5>
                <h5 class="mb-0">Integraremos una asistencia <span class="font-weight-bold">gratis</span> adaptada a las necesidades de <span class="font-weight-bold">EMTELCO</span>.</h5>
                <h5 class="mb-0">Este beneficio incluye:</h5>
              </p>
              <div class="row py-1">
                <div class="col-md-6">
                  <ul class="mb-0">
                    <li>Cobertura por pérdidas totales</li>
                    <li>Cobertura por pérdidas parciales</li>
                    <li>Cobertura de daños a terceros (Responsabilidad civil)</li>
                    <li>Gastos de transporte</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="mb-0">
                    <li>Llantas estalladas</li>
                    <li>Billetera protegida</li>
                    <li>Grúa</li>
                    <li>Traslado médico de urgencia</li>
                    <li>Asistencia jurídica</li>
                    <li>Referencia de talleres</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="pt-5 pb-2 px-3 text-blueavanzo">
  <div class="text-center">
      <h4><span class="font-weight-bold">Acá podrás ver  nuestras referencias seleccionadas para ti</span></h4>
  </div>
  <div class="py-3 d-none d-md-block">
    <div class="row">
      <div class="col-md-3">
        <div class="p-3 text-center">
          <img src="images/slider2_1.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Honda</span> 190R
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-3 text-center">
          <img src="images/slider2_2.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Honda</span> 125F
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-3 text-center">
          <img src="images/slider2_3.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Honda</span> NEO
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="p-3 text-center">
          <img src="images/slider2_4.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Suzuki</span> gn 125
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="p-3 text-center">
          <img src="images/slider2_5.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Pulsar</span> 180 GT
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 text-center">
          <img src="images/slider2_6.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Susuzi</span> Gixxer
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 text-center">
          <img src="images/slider2_7.png" class="mw-305 w-100" />
          <div class="py-1">
            <span class="font-weight-bold">Honda</span> NEO
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-3 d-sm-block d-md-none">
    <div class="">
      <div class="carrusel2 owl-carousel owl-theme">
        
        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_1.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Honda</span> 190R
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_2.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Honda</span> 125F
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_3.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Honda</span> NEO
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_4.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Suzuki</span> gn 125
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_5.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Pulsar</span> 180 GT
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_6.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Susuzi</span> Gixxer
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider2_7.png" class="mw-305 w-100" />
            <div class="py-1">
              <span class="font-weight-bold">Honda</span> NEO
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="pt-5 pb-2 px-3 text-blueavanzo">
  <div class="text-center">
      <h4><span class="font-weight-bold">Estos son los cascos y los kit de protección que podrás escoger</span></h4>
  </div>
  <div class="py-3">
    <div class="">
      <div class="carrusel3 owl-carousel owl-theme">
        
        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_1.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> SHAFT
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_2.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> LS2 353
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_3.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> LS2 353
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_4.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> LS2 353
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_5.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> LS2 353
            </div>
          </div>
        </div>

        <div class="item">
          <div class="p-3 text-center">
            <img src="images/slider3_6.png" class="mw-150 w-100 mx-auto" />
            <div class="py-1">
              <span class="font-weight-bold">CASCO</span> LS2 353
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="my-0 my-md-5 pt-5 pb-2 px-0 px-md-3 text-blueavanzo">
  <div class="row m-0">
    <div class="col-md-5 text-marinaavanzo bgcolor-azulavanzo p-3 align-self-center h-100">
      <div class="py-md-100 py-5 px-md-5">
        <div class="py-md-5 px-md-4">
          <h4><p class="font-weight-bold">En 5 sencillos pasos podrás obtener tu moto con los mejores beneficios</p></h4>
          <h4><p>¡No esperes más para tener lo que deseas!</p></h4>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="p-2 pt-5 p-md-5">
        <p class="font-weight-bold mb-0">Paso 1</p>
        <p>Llena el formulario a continuación</p>

        <p class="font-weight-bold mb-0">Paso 2</p>
        <p>Te llamaremos para coordinar la referencia de la moto que deseas y la referencia del casco que te gustaría utilizar, asimismo estableceremos la fecha para que nos regales unas firmas en los formularios del crédito (10 días aprox.)</p>

        <p class="font-weight-bold mb-0">Paso 3</p>
        <p>Queremos verte, darte la bienvenida y que nos puedas firmar los formularios, solo te pedimos que seas puntual (5 días aprox.)</p>

        <p class="font-weight-bold mb-0">Paso 4</p>
        <p>Te llamaremos para confirmar el estado de tu crédito de esta manera si fue aprobado acordaremos la entrega de tu moto.</p>

        <p class="font-weight-bold mb-0">Paso 5</p>
        <p>La sonrisa que vamos a generar al entregarte tu moto es lo mas valioso para nosotros, por eso queremos hacer un evento fenomenal para la entrega de las primeras motos. (3 semanas)</p>

        <p class="font-weight-bold py-4 text-center">Tiempo total de 4 a 5 semanas</p>
      </div>
    </div>
  </div>
</div>


<div class="my-0 mt-md-5 py-5 px-0 px-md-3 bgcolor-skyblueavanzo">
  <div class="text-blueavanzo text-center px-3">
      <h4><p class="font-weight-bold mb-0">Nunca había sido tan fácil cumplir tus sueños</p></h4>
      <h4><p class="">Llena el siguiente formulario para procesar tu solicitud</p></h4>
  </div>
  <div class="row m-0 text-blackavanzo">
    <div class="py-sm-5 col-md-4 d-block d-md-none">
      <div class="text-center">
        <img src="images/card2.png" class="py-md-5 py-xl-2 mw-450 w-100 mx-auto" />
      </div>
    </div>
    <div class="col-md-8">
      <div class="row m-3">
        <form class="d-contents"  action="callback.php" method="post" target="_self">
          <div class="col-md-6 px-3 px-sm-5">

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Tipo de documento</h6>
              <select class="w-100 form-control" type="text" name="tipodocumento" required="true">
                <option selected="true" disabled="true" value="">Escoge tu  tipo de documento</option>
                <option value="cc">CC</option>
                <option value="ce">Cedula Extranjeria</option>
              </select>
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Número de documento</h6>
              <input class="w-100 form-control" type="text" name="numerodocumento" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Nombres</h6>
              <input class="w-100 form-control" type="text" name="nombres" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Apellidos</h6>
              <input class="w-100 form-control" type="text" name="apellidos" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Ciudad de residencia</h6>
              <input class="w-100 form-control" type="text" name="ciudad" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Dirección</h6>
              <input class="w-100 form-control" type="text" name="direccion" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Celular</h6>
              <input class="w-100 form-control" type="text" name="celular" required="true" maxlength="10" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Email</h6>
              <input class="w-100 form-control" type="email" name="email" required="true" />
            </div>

          </div>
          <div class="col-md-6 px-3 px-sm-5">

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Fecha de nacimiento</h6>
              <input class="w-100 form-control" type="date" name="nacimiento" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Empresa donde trabajas</h6>
              <input class="w-100 form-control" type="text" name="empresa" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Antigüedad trabajando en la empresa</h6>
              <input class="w-100 form-control" type="text" name="antiguedad" required="true" />
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>Tipo de contrato</h6>
              <select class="w-100 form-control" type="text" name="tipocontrato" >
                <option selected="true" disabled="true" value="">Escoge tu tipo de contrato</option>
                <option value="Fijo">Fijo</option>
                <option value="Temporal">Temporal</option>
                <option value="Prestación de servicios">Prestación de servicios</option>
                <option value="Labor de obra">Labor de obra</option>
              </select>
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>¿Has tenido renovaciones?</h6>
              <select class="w-100 form-control" type="text" name="renovaciones" required="true">
                <option selected="true" disabled="true" value="numrenovaciones">Escoge el número de renovaciones</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>

            <div class="py-2">
              <h6 class="text-left mb-0"><span class="text-blueavanzo">*</span>¿Cuál fecha fue la última renovacion?</h6>
              <input class="w-100 form-control" type="date" name="fecharenovacion" required="true" />
            </div>

            <div class="py-1">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tyc" name="tyc" required="true">
                <label class="form-check-label" for="tyc"><a href="<?php echo get_site_url().'/landings/datos/index.php'; ?>" target="_blank">Acepto la política de tratamiento de datos persónales de Avanzo</a></label>
              </div>
            </div>
            <div class="py-1 text-width-11">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="suministrar" name="suministrar" required="true">
                <label class="form-check-label text-justify" for="suministrar">Autorizo a Emtelco S.A.S a suministrar; una carta laboral la cual especifique: tipo de contrato, fecha de ingreso y cargo. asi como 4 ultimas colillas de pago, las cuales especifican: Salario y las respectivas deducciones que se me aplican, a la empresa Avanzo y este a su vez a CoopCentral Entidad Financiera con el fin de realizar la gestión para la adquisición de vehículo (moto), realizar el previo estudio de crédito y definir la posibilidad de venta.</label>
              </div>
            </div>
            <div class="py-4 text-right">
              <button type="submit" class="bgcolor-azulavanzo text-marinaavanzo btn btn-primary"><span class="font-weight-bold">Enviar</span></button>
            </div>

          </div>
        </form>
      </div>
      <div class=""></div>
    </div>
    <div class="py-md-5 py-xl-2 col-md-4 d-none d-md-block">
      <div class="py-md-5 py-xl-2 text-center">
        <img src="images/card2.png" class="py-md-5 py-xl-2 mw-450 w-100 mx-auto" />
      </div>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>