'use strict';
$(document).ready(function() {
	$('#btnCancelar').click(function(event) {
		alert('hola');
		$.post("cancelar");
   		
	});
});