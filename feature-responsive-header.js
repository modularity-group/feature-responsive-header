jQuery(function($){

  const $window = $(window);
  const $body = $('body');

  $('a[href="#menu"]').click(function(e){
    e.preventDefault();
    $body.toggleClass('active-modal-menu');
  });

  $('.feature-responsive-header__menu a').click(function(){
    $body.removeClass('active-modal-menu');
  });

  $('main').click(function(){
    $body.removeClass('active-modal-menu');
  });

  function setHeaderState(stateClass) {
    if ($window.scrollTop() > 0) {
      $body.addClass(stateClass);
    } else {
      $body.removeClass(stateClass);
    }
  }

  setHeaderState('is-scrolled');

  $window.on('scroll', function() {
    setHeaderState('is-scrolled');
  });

});
