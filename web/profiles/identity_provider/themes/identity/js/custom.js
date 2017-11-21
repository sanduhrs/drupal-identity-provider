(function ($) {

  Drupal.behaviors.identity = {
    attach: function (context, settings) {
      $('.menu-dropdown-toggle > a > span').not('.rippleWrap').html(
        $('#language-dropdown li.is-active a').text()
      );
    }
  };

})(jQuery);
