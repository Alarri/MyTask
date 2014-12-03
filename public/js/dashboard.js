'use strict';
$(document).ready(function() {
	$('#btnAddTask').click(function(event) {
		var descriptionTask = prompt("Ingrese una nueva tarea: ", "Tarea nueva");

		if (descriptionTask) {
			//alert(descriptionTask);
			AgregarTarea(descriptionTask);
   			TraerTarea();
		};
   		
	});

	TraerTarea();
});
	/*Envia la informacion de la tarea nueva*/
	function AgregarTarea(valor){	

		$.post( "savetasks",{ key : valor});		
	}
	/*Obtine las tareas y las inserta en las distintas casillas*/
	function TraerTarea(){
		$.getJSON('mostrartasks', {}, function(json) {	
			$("#sortable1 li").remove();
			$("#sortable2 li").remove();
			$("#sortable3 li").remove();
			$("#sortable4 li").remove();
			for (var i = 0; i < json.length; i++) {
				if (json[i].status_id == 1) {
					$('#sortable1').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item"> ' + json[i].description + '  <a href="tasks/' + json[i].id + '/edit" class="btn btn-default btn-xs glyphicon glyphicon-pencil"></a> <a href="tasks/' + json[i].id + '/confirm" class="btn btn-default btn-xs glyphicon glyphicon-trash"></a> </li>');
				};

				if (json[i].status_id == 2) {
					$('#sortable2').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item"> ' + json[i].description + '  <a href="tasks/' + json[i].id + '/edit" class="btn btn-default btn-xs glyphicon glyphicon-pencil"></a> <a href="tasks/' + json[i].id + '/confirm" class="btn btn-default btn-xs glyphicon glyphicon-trash"></a> </li>');
				};

				if (json[i].status_id == 3) {
					$('#sortable3').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item"> ' + json[i].description + '  <a href="tasks/' + json[i].id + '/edit" class="btn btn-default btn-xs glyphicon glyphicon-pencil"></a> <a href="tasks/' + json[i].id + '/confirm" class="btn btn-default btn-xs glyphicon glyphicon-trash"></a> </li>');
				};

				if (json[i].status_id == 4) {
					$('#sortable4').append('<li id = ' + json[i].id + ' class="ui-state-default list-group-item"> ' + json[i].description + '  <a href="tasks/' + json[i].id + '/edit" class="btn btn-default btn-xs glyphicon glyphicon-pencil"></a> <a href="tasks/' + json[i].id + '/confirm" class="btn btn-default btn-xs glyphicon glyphicon-trash"></a> </li>');
				};											
				
				
			};
            	
          

        });
        
	}

	

	function cambioEstado(id, status){		
		$.post( "modificarEstado",{ key : id, changeStatus : status});		
	}

	 $(function() {
		$( "ul.droptrue" ).sortable({
			connectWith: "ul"
		});
		$( "ul.dropfalse" ).sortable({
			connectWith: "ul",
			dropOnEmpty: false
		});
		$( "#sortable1, #sortable2, #sortable3, #sortable4" ).disableSelection();
	});

	/*Obtiene el id del elemento arrastrado hacia la casilla 1*/ 
	$('#sortable1').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        //alert(liId);
      		cambioEstado(liId,1);	
		}
	}).disableSelection(); 

	/*Obtiene el id del elemento arrastrado hacia la casilla 2*/ 
	$('#sortable2').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        //alert(liId);
      		cambioEstado(liId,2);	
		}
	}).disableSelection();

	/*Obtiene el id del elemento arrastrado hacia la casilla 3*/ 
	$('#sortable3').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        //alert(liId);
      		cambioEstado(liId,3);	
		}
	}).disableSelection();

	/*Obtiene el id del elemento arrastrado hacia la casilla 4*/ 
	$('#sortable4').sortable({
		receive: function(event, ui){
	        //Get the receiving ul id
	        //var receivingID = ui.item.parent('ul').attr('id');
	        var liId = ui.item.parent('ul').children('li').attr('id');
	        //Get the sending ul id
	        //var sendingID = ui.sender.attr('id');
	        //alert(liId);
	        
      		cambioEstado(liId,4);	
		}
	}).disableSelection();

 


	


