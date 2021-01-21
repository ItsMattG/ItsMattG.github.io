$(document).ready(function() { /* document.ready means the code can only run after the document has been loaded */

  /* For the sticky navigation */

  $('.js--section-features').waypoint(function(direction) { /* the direction allows us to choose wherever or not the function will run depending on the direction */
      if (direction == "down") {
          $('nav').addClass('sticky');
      } else {
          $('nav').removeClass('sticky');
      }
  }, {
      offset: '60px;' /* means this function will occur 60px before reaching that class */
  });

  /* Scroll on buttons */

  $('.js--scroll-to-start').click(function() {
      $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000) /* we select this class when we click on it we have an animation that scrolls to the top of the js section plans section with a speed of 1 second (1000) */
  });

  $('.js--scroll-to-why').click(function() {
      $('html, body').animate({scrollTop: $('.js--section-why').offset().top}, 1000) 
  });

  $('.js--scroll-to-top').click(function() {
    $('html, body').animate({scrollTop: $('.js--scroll-to-top').offset().top}, 1000) 
  });

  /* Navigation scroll */

  /* this function selects a link element where a href element starts with a # symbol if the element exists it scrolls to it */

  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
      // On-page links
          if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
          ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
          if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
      $('html, body').animate({
          scrollTop: target.offset().top
      }, 1000, function() {
          // Callback after animation
          // Must change focus!
      var $target = $(target);
      $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
              return false;
          } else {
                  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
          };
      });
      }
  }
  });

  /* Mobile nav */
  $('.js--nav-icon').click(function() {
      var nav = $('.js--main-nav');
      var icon = $('.js--nav-icon ion-icon');
      
      if (icon.attr("name") == "menu-outline") {
          icon.attr("name", "close-outline");
       } 
       else {
          icon.attr("name", "menu-outline")
       }

       /* appear and disappear */
       nav.slideToggle(200);
       
    });
  

});