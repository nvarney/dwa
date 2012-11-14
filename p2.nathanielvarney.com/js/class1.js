//alert("HELLO WORLD");

$(document).ready(function() {
	//Vanilla Javascript
	//document.getElementByID('lucy').style.bacgroundColor = 'red';
	
	//jQuery
	//$('#lucy').css('background-color', 'red');
	
	// Make lucy have 3px
	//$('#lucy').css('border', '3px solid red');
	
	// how about something on a click
	$('#lucy').click(function() {
		console.log('lucy was clicked');
		$('#lucy').css('border', '4px solid blue');
		$('#ricky').css('width', '400px');

	});
	
	
	
	

});