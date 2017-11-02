// Using the closure to map jQuery to $.
(function ($) {




// Store our function as a property of Drupal.behaviors.
  Drupal.behaviors.identityprovider = {
    attach: function (context, settings) {

      $('.menu-dropdown-toggle > a > span').not('.rippleWrap').html(
        $('#language-dropdown li.is-active a').text()
      );
    }
  };

})(jQuery);