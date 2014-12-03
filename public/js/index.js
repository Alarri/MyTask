'use strict';
$(document).ready(function() {
	cargar_lista();
	$('#action').click(function(event) {
		//print_values();
		//hide_elements();
		/* Act on the event */
	});
});

function hide_elements() {
	$('#edit').hide();
	$('.edit').hide();
}

function print_values() {
	var input1 = $('#edit').val();
	alert(input1); 
}

function cargar_lista () {
	$.getJSON('/', {}, function(json, textStatus) {
		for (var i = 0; i < json.data.length; i++) {
			$('#lista').append('<li>' + json.data[i].nombre + '</li>');
		};	
	});
}