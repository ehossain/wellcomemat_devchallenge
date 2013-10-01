<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

	public function action_index(){
		//$tasks = ORM::factory('tasks')->find_all();
		//$projects = ORM::factory('projects')->find_all();
		
		$tasks = DB::select('project_id','due_at','completed',array('name','tasks_name'))
		->from('tasks')
		->group_by('id');
		
		$tasks_grouped = ORM::factory('projects')
		->select('*')
		->join(array($tasks, 'tasks'), 'LEFT')
		->on('projects.id', '=', 'tasks.project_id')
		->find_all();
		
		$view = VIEW::factory('projects/index')->bind('tasks',$tasks)->bind('projects',$projects);
		$view_grouped = VIEW::factory('projects/index')->bind('tasks_grouped',$tasks_grouped);
		$this->response->body($view_grouped);
	}
	

}
