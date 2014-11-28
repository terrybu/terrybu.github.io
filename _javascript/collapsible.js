function collapseToggle() {
	var possibleDivs = ['#collapseOne','#collapseTwo','#collapseThree','#collapseFour'];
	for (var i = 0; i < possibleDivs.length; i++) {
	$(possibleDivs[i]).collapse('toggle');
	}
}

function closeAllElse(divName) {
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

function closeAll(divName) {
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
	$('.panel-heading').attr('data-toggle', 'collapse');
	$('.panel-heading').attr('data-parent', '#accordion');
	collapseToggle();

	//collapsible Panel effects POST CLICK//
	//global variable zindex
	var z = 0;
	$('.panel-heading').on({
		click: function() {
			z++;
		}
	});

	function postClickPanelColorStay(paneln, classColor) {
		var panelID = '#CollapsiblePanel' + paneln;
		var headingID = '#p' + paneln;
		$(panelID).on('show.bs.collapse', function(){
			$(headingID).addClass(classColor);
			$(panelID).css("z-index",z);	
		});
		$(panelID).on('hide.bs.collapse', function(){
			$(headingID).removeClass(classColor);
		});
	}
	postClickPanelColorStay(1, 'red');
	postClickPanelColorStay(2, 'cyan');
	postClickPanelColorStay(3, 'orange');
	postClickPanelColorStay(4, 'lime');
	//END//

if (matchMedia('only screen and (max-width: 1200px)').matches)
{
	$(function () { 
		      closeAll('#collapseOne');
		      closeAll('#collapseTwo');
		      closeAll('#collapseThree');
		      closeAll('#collapseFour');
	});

}