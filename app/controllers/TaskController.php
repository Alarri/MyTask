<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Request::ajax())		
		{			
    		$tareas = Task::SelectTasksPerson(Auth::id());
    		return Response::Json($tareas);
		}
		$this->layout->title = 'Dashboard';
		$this->layout->nest(
			'content',
			'dashboard.index'
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$description = Input::get('key');			
		$task = new Task();
		$task->persons_id = Auth::id();
		$task->status_id = 1;
		$task->description = $description;
		$task->save();
		return Response::Json($description);	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->title = 'Editar Tarea';
		$task = Task::find($id);
		$this->layout->nest(
			'content',
			'dashboard.edit',
			array(
				'tarea' => $task
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$descripcion = Input::get('tarea');				
		$task = Task::find($id);
		if ($task->persons_id == Auth::id()) {
			$task->description = $descripcion;		
			$task->save();
			return Redirect::to('mostrartasks');
		}
		$this->layout->title = 'Mensaje de Error';
		$this->layout->nest(
			'content',
			'dashboard.error'
		);

		//return Redirect::to('/error');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateStatus()
	{
		$id = Input::get('key');
		$status = Input::get('changeStatus');		
		$task = Task::find($id);
		$task->status_id = $status;		
		$task->save();
		return Response::Json($id);

	}

	public function deleteTask($id)
	{
		$this->layout->title = 'Eliminar Tarea';
		$task = Task::find($id);
		$this->layout->nest(
			'content',
			'dashboard.delete',
			array(
				'tarea' => $task
			)
		);		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tarea = Task::find($id);
		if ($tarea->persons_id == Auth::id()) {
			$tarea->delete();
			return Redirect::to('mostrartasks');
		}
		dd('Tarea incorrecta');
		
	}


}
