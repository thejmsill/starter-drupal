(function ($) {

  Drupal.behaviors.hamburger = {
    attach: function(context) {
      $('.hamburger').click(function() {
        $('#block-system-main-menu').toggleClass('show');
      });
    }
  };

})(jQuery);

