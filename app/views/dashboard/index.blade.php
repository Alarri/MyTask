
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Task</title>
  {{HTML::style('bootstrap/css/bootstrap.min.css')}}
  {{HTML::style('bootstrap/css/estilos.css')}}
</head>
<style>
  #sortable1, #sortable2, #sortable3, #sortable4 
  {  background: #eee; width: auto; padding: 10px}

</style>
<body id="body">
  <div class="container">
    <br><br><br>
    <div id="user">
      <h1 class="text-center">Usuario: {{ Auth::user()->user_person }}</h1>
    </div>
    <br><br>
    <div class="panel-footer">          
       <button type="button" id="btnAddTask" class="btn btn-primary">Agregar Tarea</button>
     </div>
    <br><br>
    <div class="row">  	
      <div class="col-md-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <strong><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva Tarea</strong></div>
          <div class="panel-body">
            <ul id="sortable1" class="droptrue list-group">

            </ul>
          </div>
       </div>
     </div>
     <div class="col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading text-center">
          <strong><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> En proceso</strong></div>
        <div class="panel-body">
         <ul id="sortable2" class="droptrue list-group">							

         </ul>
       </div>
     </div>
   </div>
   <div class="col-md-3">
    <div class="panel panel-info">
      <div class="panel-heading text-center">
      <strong><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Finalizadas</strong></div>
      <div class="panel-body">
        <ul id="sortable3" class="droptrue list-group">							

        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="panel panel-warning">
      <div class="panel-heading text-center">
      <strong><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Verificadas</strong></div>
      <div class="panel-body">
        <ul id="sortable4" class="droptrue list-group">							

        </ul>
      </div>
    </div>
  </div>
</div>
</div>
{{HTML::script('js/dashboard.js');}}
</body>