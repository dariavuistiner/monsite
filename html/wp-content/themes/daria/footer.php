   <script src="vendor/jquery/dist/jquery.min.js"></script>
   <script src="vendor/foundation/js/foundation.min.js"></script>
   <script src="vendor/foundation/js/foundation/foundation.equalizer.js"></script>
   <script src="js/app.js"></script>
   <script>
   var selector = ".nav a";
   $(selector).click(function(){
      $(selector).removeClass('active');
      $(this).addClass('active');
   });
   var $root = $('html, body');
   $('a').click(function() {
      var href = $.attr(this, 'href');
      $root.animate({
         scrollTop: $(href).offset().top
      }, 1000, function () {
         window.location.hash = href;
      });
      return false;
   });
   (function($) {
      if ( $(window).width() > 1024) {
         $("header h1").next().height($("header h1").height());
         $(window).scroll(function() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > 600) {
               $('header h1').css('opacity',0);
            }
            else {
               $('header h1').css('opacity',1-scrollTop/600);
            }
         }).scroll();
      }
   }(jQuery));
   </script>
    <?php wp_footer(); ?>
</body>
</html>
