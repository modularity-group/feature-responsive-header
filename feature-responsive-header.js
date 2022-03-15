jQuery(function($){

  const $window = $(window);
  const $body = $('body');
  let headerStateClass = 'is-scrolled';
  headerStateClass+= $body.hasClass('is-header-mode-mobileonscroll') ? ' is-header-mode-mobilefirst' : '';

  $('a[href="#menu"]').click(function(e){
    e.preventDefault();
    $body.toggleClass('is-header-active-modalmenu');
  });

  $('.feature-responsive-header__menu a').click(function(){
    $body.removeClass('is-header-active-modalmenu');
  });

  $('main').click(function(){
    $body.removeClass('is-header-active-modalmenu');
  });

  function setHeaderState(stateClass) {
    if ($window.scrollTop() > 0) {
      $body.addClass(stateClass);
    } else {
      $body.removeClass(stateClass);
    }
  }

  setHeaderState(headerStateClass);

  $window.on('scroll', function() {
    setHeaderState(headerStateClass);
  });

});
