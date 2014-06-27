function closeElse (divName) {
	var possibleDivs = ['#collapseOne','#collapseTwo','#collapseThree','#collapseFour'];
	for (var i = 0; i < possibleDivs.length; i++) {
		var select = possibleDivs[i];
		if (divName === select) {
			possibleDivs.splice(i, 1)
			for (var i = 0; i < possibleDivs.length; i++) {
			   $(possibleDivs[i]).collapse('hide');
			}
		}
	}
};

function collapseToggle() {
	var possibleDivs = ['#collapseOne','#collapseTwo','#collapseThree','#collapseFour'];
	for (var i = 0; i < possibleDivs.length; i++) {
	$(possibleDivs[i]).collapse('toggle');
	}
};

//this is short-hand for $(document).ready(function() { ... a lot easier!!
$(function () { 
      collapseToggle();
      $('.panel-heading').attr('data-toggle', 'collapse');
      $('.panel-heading').attr('data-parent', '#accordion');
     
      $('#collapseOne').on('show.bs.collapse', function () {
        closeElse('#collapseOne');
      });
});

$('.panel-heading').on({
	click: function() {
	  playclip();
	}    
});