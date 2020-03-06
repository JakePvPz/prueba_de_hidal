
<?php include('includes/navbar.php'); ?>

  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/banner/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Somos especialistas en Software</h1>
              <p>Somos una empresa dedicada al desarrollo de sistemas financieros, los cuales sirven como herramienta para agilizar los procesos de la empresa y garantizar la obtención de información con eficacia y veracidad.</p>
              <div class="text-center">
                <a href="" class= "button bg" data-toggle="modal" data-target="#modalContactForm">Contactanos</a>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Envia un Mensaje</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="enviar.php" method="POST" >

        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            
            <i class="fas fa-user prefix grey-text"></i>
  
            <input type="text"  id="nombre" class="form-control validate" name="nombre" required>
            <label data-error="wrong" data-success="right" for="nombre">Nombre</label>
          </div>
  
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="email" class="form-control validate" name="correo" required>
            <label data-error="wrong" data-success="right" for="email">Correo electronico</label>
          </div>
  
          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <textarea type="text"  id="mensaje"  class="md-textarea form-control" rows="4" name="mensaje" required></textarea>
            <label data-error="wrong" data-success="right" for="mensaje">Mensaje</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-unique">Enviar<i class="fas fa-paper-plane-o ml-1"></i></button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
    </div>
    </div>
  </div>
  </div>

</div>
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Caracteristicas Asombrosas de Software</h2>
          <p class="section-intro__subtitle">En Hidalsoft les ofrecemos soluciones de sistemas adaptables a la necesidad de su negocio. </p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-package"></i>
                </span>
                <h3 class="card-feature__title">Misión</h3>
                <p class="card-feature__subtitle">Proveer servicios de desarrollo y consultoría de software mediante el uso eficiente de tecnologías de información con el propósito de incrementar las ventajas competitivas de los clientes.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-mouse-alt"></i>
                </span>
                <h3 class="card-feature__title">Solución de negocios</h3>
                <p class="card-feature__subtitle">Las soluciones son desarrolladas buscando los más altos estándares de calidad, en presupuesto, en el tiempo estipulado y con una gran flexibilidad para adaptarse a los continuos cambios que los clientes experimenten a lo largo del tiempo.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-headphone-alt"></i>
                </span>
                <h3 class="card-feature__title">Soporte Técnico</h3>
                <p class="card-feature__subtitle">Como su proveedor, nos preocupamos de la creación, monitoreo, administración y soporte de los sistemas tecnológicos de su empresa, permitiéndole centrarse en el core (actividad principal) de su negocio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Feature section end =================-->      
    
    <!--================ about section start =================-->      
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row no-gutters align-items-center">
          <div class="col-md-5 mb-5 mb-md-0">
            <div class="about__content">
              <h2>Liderando el Desarrollo Tecnologico</h2>
              <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent pulvinar fusce nostra port</p>
              <a class="button button-light" href="#">Know More</a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="about__img">
              <img class="img-fluid" src="img/home/about.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ about section end =================-->      
    
    <!--================ Offer section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Características que ofrecemos</h2>
          <p class="section-intro__subtitle">En Hidalsoft les ofrecemos soluciones de sistemas (software) de alta calidad e integración utilizando la más avanzada tecnología (Cliente/Servidor). Dichos sistemas, están dirigidos a empresas comerciales, de servicios y manufactureras.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-pencil-alt"></i>
                  </span>
                  <h4>Fácil de manejar</h4>
                  <p>Creamos sistemas interactivos e intuitivos facilitando así el uso del mismo para usuario</p>
                </div>
              </div>
              
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-ruler-pencil"></i>
                  </span>
                  <h4>Herramienta de análisis</h4>
                  <p>Las Herramientas de analisis son incorporadas en forma paralela con el desarrolo del sistema solicitado.</p>
                </div>
              </div>
            </div>

            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-cut"></i>
                  </span>
                  <h4>Herramientas Profesionales</h4>
                  <p>A través de herramientas profesioanales proporcionamos compromiso de confidencialidad y seguridad en nuestros servicios. </p>
                </div>
              </div>
              
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-light-bulb"></i>
                  </span>
                  <h4>Siempre Activo</h4>
                  <p>Trabajamos de lunes a viernes de: 8:00–12:50, 14:00–17:00 y los sabados de: 8:00-12:00.</p>
                <p>(809) 241-6609</p>
                <p>(809)-582-6609</p>
                <p>hidalsoft@gmail.com</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="offer-single__img">
              <img class="img-fluid" src="img/home/offer.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Offer section end =================-->      

    <!--================ Solution section start =================-->      
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row align-items-center pt-xl-3 pb-xl-5">
          <div class="col-lg-6">
            <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
              <img class="img-fluid" src="img/home/solution.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="solution__content">
              <h2>Soluciones Simples para Problemas Complejos</h2>
              <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent pulvinar fusce nostra port</p>
              <a class="button button-light" href="#">Saber Más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Solution section end =================-->      

    <!--================ Testimonial section start =================-->      
    <section class="section-padding bg-magnolia">
      <div class="container">
        <div class="section-intro pb-5 text-center">
          <h2 class="section-intro__title">Dice mi cliente</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam </p>
        </div>

        <div class="owl-carousel owl-theme testimonial">
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="img/testimonial/testimonial1.png" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="img/testimonial/testimonial1.png" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="img/testimonial/testimonial1.png" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Testimonial section end =================-->      


  </main>

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">

          <div class="col-xl-8 col-sm-8 mb-4 mb-xl-0 single-footer-widget">
            <h4>Recursos</h4>
            <ul>
              <li><a href="#">Guías</a></li>
              <li><a href="#">Investigación</a></li>
              <li><a href="#">Expertos</a></li>
              <li><a href="#">Agencias</a></li>
            </ul>
          </div>
          <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
            <h4>Boletín de noticias</h4>
            <p>Puedes confiar en nosotros. Sólo enviamos ofertas promocionales.</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
               method="get" class="form-inline">
                <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                 required="" type="email">
                <button class="click-btn btn btn-default">Suscribirse</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
  
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left">
          <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos Reservados | se creo con la colaboracion de <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- ================ End footer Area ================= -->


  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>