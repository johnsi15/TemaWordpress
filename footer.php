
  <footer>
            <!-- redes sociales-->
            <section class="container-fluid">
                <article class="row">
                    <div class="col-xs-3 col-sm-2 col-md-1">
                        <a href="https://www.facebook.com/asesorvncucuta/" target="_blank" class="icon-facebook redes_sociales f"></a>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1">
                        <a href="https://www.instagram.com/asesorvncucuta/" target="_blank" class="icon-instagram redes_sociales i"></a>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1">
                        <a href="" target="_blank" class="icon-twitter redes_sociales t"></a>
                    </div>                    
                </article>
                <article class="row redes_wp">
                    <div class="col-xs-12">
                       <span class="icon-whatsapp redes_sociales w"> 3202492861</span>
                    </div>
                </article>
                <article class="row pie_logos">
                    <div class="col-xs-4 col-sm-3 col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/audi.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-1">
                       <img src="<?php bloginfo('template_url')?>/img/bmw.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/che.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="clearfix visible-xs espacio_logo"></div>      
                    <div class="col-xs-4 col-sm-3 col-md-1">
                       <img src="<?php bloginfo('template_url')?>/img/ford.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="clearfix visible-sm espacio_logo_2"></div>
                    <div class="col-xs-4 col-sm-3  col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/honda.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3  col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/mazda.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="clearfix visible-xs espacio_logo"></div> 
                    <div class="col-xs-4 col-sm-3  col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/kia.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3  col-md-1">            
                        <img src="<?php bloginfo('template_url')?>/img/vols.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="clearfix visible-sm espacio_logo_2"></div> 
                    <div class="col-xs-4 col-sm-3  col-md-1">
                       <img src="<?php bloginfo('template_url')?>/img/mercedes.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="clearfix visible-xs espacio_logo"></div> 
                    <div class="col-xs-4 col-sm-3  col-md-1">
                       
                        <img src="<?php bloginfo('template_url')?>/img/Dodge.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3  col-md-1">
                                               
                        <img src="<?php bloginfo('template_url')?>/img/nissan.png"  class="img-responsive"alt="logo" class="logo__foto">
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-1">
                        <img src="<?php bloginfo('template_url')?>/img/alfa.png" class="img-responsive" alt="logo" class="logo__foto">
                    </div>
                </article> <!--cierre fila -->
<!-- ___________________________________________________________________________ -->             

            </section>
        </footer>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script src="<?php bloginfo('template_url')?>/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/bootstrap.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/main.js"></script>
    <script>
          /*con este codigo agregamos los data y la clase que necesita el nuevo enlace que hace parte del sub-menu*/
      $("[title~='opciones-menu']").addClass("dropdown-toggle");
      $("[title~='opciones-menu']").attr("data-toggle", "dropdown");
      $("[title~='opciones-menu']").attr("role", "button");
      $("[title~='opciones-menu']").attr("aria-haspopup", "true");
      $("[title~='opciones-menu']").attr("aria-expanded", "false");
        $("[title~='opciones-submenu']").attr("data-toggle", "dropdown");
        $("[title~='opciones-submenu']").addClass("dropdown-toggle");
        $(".postform").addClass("form-control");
                /*agregar clase de active en el menu*/
                $(".current-menu-item").addClass("active");
     $('.carousel').carousel({
        interval: 10000
    });
    </script>
   
    <!-- Comentarios de facebook-->
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=199028350462673";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<!-- Boton de compartir y like-->
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=199028350462673";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

<!--mensajes por facebook -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=199028350462673";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

<!--Widgets lateral -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=199028350462673";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>

<!-- Sub menu -->
        <script>
            (function($){
                $(document).ready(function(){
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                        event.preventDefault(); 
                        event.stopPropagation(); 
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);
        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
