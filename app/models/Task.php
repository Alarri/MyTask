<?php

class Task extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('persons_id', 'status_id', 'description');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function SelectTasksPerson($id)
	{
			$sql = 'select id, status_id, description from tasks
			where persons_id ='. $id;
			return DB::select($sql);
	}

}