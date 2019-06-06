
      <footer>
         <p>©2019 RealTech. Todos os direitos reservados. | Desenvolvido por <a href="https://www.linkedin.com/in/let%C3%ADcia-fernandes-573b1b16b/" target="_blank" style="color: #FFEB3B !important;">Letícia Fernandes</a></p>
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
         	  $.fn.lightspeedBox();
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