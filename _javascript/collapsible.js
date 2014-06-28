
/*
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('caret glyphicon-chevron-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
*/




function collapseToggle() {
	var possibleDivs = ['#collapseOne','#collapseTwo','#collapseThree','#collapseFour'];
	for (var i = 0; i < possibleDivs.length; i++) {
	$(possibleDivs[i]).collapse('toggle');
	}
}

function closeAllElse (divName) {
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
}

function closeAll (divName) {
	$(divName).on('show.bs.collapse', function() {
		closeAllElse(divName);
	});
}

//this is short-hand for $(document).ready(function() { ... a lot easier!!
	$('.panel-heading').on({
		click: function() {
			playclip();
		}    
	});

	$('.panel-heading').on({
		mouseenter: function() {
			playclip2();
		}
	});

	collapseToggle();
	$('.panel-heading').attr('data-toggle', 'collapse');
	$('.panel-heading').attr('data-parent', '#accordion');
	$(function () { 
		      closeAll('#collapseOne');
		      closeAll('#collapseTwo');
		      closeAll('#collapseThree');
		      closeAll('#collapseFour');
	});


$('#collapseOne').on('show.bs.collapse', function() {
		$('.panel-heading').addClass('redHeading');
	});
