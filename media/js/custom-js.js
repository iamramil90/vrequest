var js = jQuery.noConflict();

js(document).ready(function(event){

	//add layout to button
	js(".button").button();

	//sticky wrapper
	js(".header.sticky").sticky({topSpacing:0});
	js(".menu.sticky").sticky({topSpacing:"50px"});


	//change window layout
	var windowHeight = js(window).height();
	js(".content, .sidebar").height(windowHeight - 50);

	js(window).resize(function(){
		js(".content, .sidebar").height(windowHeight - 45);
	});

	js(".date").datepicker({ 
		minDate: 0,
		dateFormat: "yy-mm-dd",
    timeFormat:  "HH:mm"
	});

});