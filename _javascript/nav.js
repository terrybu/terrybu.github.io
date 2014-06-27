function Toggle(size) {
  $('.dropdown-toggle').on({
    mouseleave: function() {
      $( '#bodyContent' ).animate({
      'marginTop' : "-="+size+"px"});
    },
    mouseenter: function() {
    $( '#bodyContent' ).animate({
      'marginTop' : "+="+size+"px"});
    }
  });
}

function ToggleBig() {
    $('.dropdown-toggle').on({
    mouseleave: function() {
      $( '#bodyContent' ).animate({
      'marginTop' : "-=150px"});
    },
    mouseenter: function() {
    $( '#bodyContent' ).animate({
      'marginTop' : "+=150px"});
    }
  });
}

  if (matchMedia('only screen and (max-width: 400px)').matches) {
    Toggle(120);    
  }
  else if (matchMedia('only screen and (max-width: 500px)').matches){
    Toggle(140);
  }
  else {
    Toggle(170);
  }
