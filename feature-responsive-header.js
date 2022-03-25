jQuery(function($){

  const $window = $(window);
  const $body = $('body');
  let headerStateClass = 'is-scrolled';
  let headerStateClassDeep = 'is-scrolled-deep';
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

  function setHeaderState(stateClass, stateClassDeep) {
    if ($window.scrollTop() > 0) {
      $body.addClass(stateClass);
      if ($window.scrollTop() > $window.height()) {
        $body.addClass(stateClassDeep);
      }
    } else {
      $body.removeClass(stateClass).removeClass(stateClassDeep);
    }
  }

  setHeaderState(headerStateClass, headerStateClassDeep);

  $window.on('scroll', function() {
    setHeaderState(headerStateClass, headerStateClassDeep);
  });

});
