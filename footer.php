<!-- //Footer -->
<!--contact -->
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title clr title-fale">FALE CONOSCO</h3>
            <div class=" contact-form col-lg-12 col-md-12 col-sm-12">
               <form action="enviarMensagem.php" method="post">
                  <div class="row contact-bothside-agileinfo">
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="text" name="nome" placeholder="Nome" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="text" name="sobrenome" placeholder="Sobrenome" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="email" name="email" placeholder="Email" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="text" name="telefone" placeholder="Telefone" required="">
                     </div>
                     <textarea name="mensagem" placeholder="Mensagem" required=""></textarea>
                     <input type="submit" value="ENVIAR">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!--//contact -->
      <div class="footer">
         <div class="container">
            <div class="row footer-agile-grids">
               <div class="col-lg-5 col-md-12 col-sm-12 wthree-left-right">
                  <h4>CONTATE-NOS</h4>
                  <div class="addres-up">
                     <ul>
                        <li>
                           <span class="fa fa-map-marker icons-left" aria-hidden="true"></span>
                           <p style="color: white !important">Rua Bragança, 59 - Matadouro - <br> Bragança Paulista</p>
                        </li>
                        <li>
                           <span class="fa fa-phone icons-left" aria-hidden="true"></span>
                           <p style="color: white !important">(11)99558-6740</p>
                        </li>
                        <li>
                           <span class="fa fa-envelope"></span>
                           <p><a style="color: white !important" href="mailto:contato@realtechautomacao.com.br">contato@realtechautomacao.com.br</a></p>
                        </li>
                     </ul>
                  </div>
                  <div class="icons">
                     <ul>
                        <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511995586740"><span class="fa fa-whatsapp icon icon-border"></span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-7 col-md-12 col-sm-12 wthree-left-right">
                  <div class="contact-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.2158957538113!2d-46.53712538555937!3d-22.942274744904857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceca1fe376bdc5%3A0xca5b350d8af8665b!2sR.%20Bragan%C3%A7a%2C%2059%20-%20Matadouro%2C%20Bragan%C3%A7a%20Paulista%20-%20SP%2C%2012910-360!5e0!3m2!1spt-BR!2sbr!4v1616252815241!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <p>©2021 RealTech. Todos os direitos reservados. | Desenvolvido por <a href="https://www.linkedin.com/in/let%C3%ADcia-fernandes-573b1b16b/" target="_blank" style="color: #FFEB3B !important;">Letícia Fernandes</a></p>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- carousal service slider-->
      <script src="js/slick.js"></script>
      <script>
         $(document).on('ready', function() {
           $(".center").slick({
         	dots: true,
         	infinite: true,
         	centerMode: true,
         	slidesToShow: 2,
         	slidesToScroll: 2,
         	responsive: [
         		{
         		  breakpoint: 768,
         		  settings: {
         			arrows: true,
         			centerMode: false,
         			slidesToShow: 2
         		  }
         		},
         		{
         		  breakpoint: 480,
         		  settings: {
         			arrows: true,
         			centerMode: false,
         			centerPadding: '40px',
         			slidesToShow: 1
         		  }
         		}
         	 ]
           });
         });
      </script>
      <!-- //carousal -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true,
         		nav: false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!-- clients FlexSlider-JavaScript -->
      <script defer src="js/jquery.flexslider.js"></script>
      <script>
         $(window).load(function(){
         $('.flexslider').flexslider({
         	animation: "slide",
         	start: function(slider){
         		$('body').removeClass('loading');
         	}
         });
         });
      </script>
      <!-- //clients FlexSlider-JavaScript -->
      <!-- gallery-lightbox -->  
      <script src="js/lsb.min.js"></script>
      <script>
         $(window).load(function() {
         	  $.fn.lightspeedBox({
                 showImageTitle: false, 
                 showDownloadButton: false,
                 zIndex: 999,
                 showAutoPlayButton: false,
                 locale: {
                  nextButton: 'Próximo',
                  prevButton: 'Anterior',
                  closeButton: 'Fechar',
                  noImageFound: 'Imagem não encontrada.',
                 }
              });
         	});
      </script> 
      <!-- //gallery-lightbox -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>