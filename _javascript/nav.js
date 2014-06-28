$(function(){ 
 $('dropdown-toggle').collapse('hide');
 $('.dropdown-toggle').on({
    click: function() {
      playclip();
    },
  });
});

/* 
function ToggleClick(size) {
  $('.dropdown-toggle').on({
    click: function() {
            playclip();
      $( '#bodyContent' ).animate({
      'marginTop' : "+="+size+"px"});
    } 
  });
}

function Toggle() {
  if (matchMedia('only screen and (max-width: 400px)').matches) {
    ToggleClick(120);    
  }
  else if (matchMedia('only screen and (max-width: 500px)').matches){
    ToggleClick(140);
  }
}
//this below code is just for your own development purposes. Hover and move-down effects won't matter in mobile/tablets because you can't hover anyways. You need to event-listen on CLICKS Only//
Toggle();
*/

function ToggleHover(size) {
  $('.dropdown-toggle').on({
    mouseenter: function() {
    $( '#kyotoImage' ).animate({
      'marginTop' : "+="+size+"px"});
    },
    mouseleave: function() {
    $( '#kyotoImage' ).animate({
      'marginTop' : "-="+size+"px"});
    }
  });
}
if (matchMedia('only screen and (max-width: 500px)').matches) {
    ToggleHover(120);    
 }
