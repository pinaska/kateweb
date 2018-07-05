/**
 * Theme functions file.
 * KateWeb script for navigation and widget area.
 */
(function($) {
    var $menuToggle = $('.menu-toggle');
    var $mainNavigation = $('.main-navigation');
    var $mobileMenu = $('.mobile-menu');
    // var $siteheader = $('.site-header');
  
    $menuToggle.on('click', function(evt) {
      evt.preventDefault();
      $mainNavigation.toggleClass('toggled');
      $mobileMenu.toggleClass('is-active');
    //   $siteheader.addClass('head2');
    });
    
  
  })(jQuery);
