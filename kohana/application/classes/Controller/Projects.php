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
		
		$project_new = ORM::factory('projects');
		$tasks_new = ORM::factory('tasks');
		
		/*$tasks_numbered = ORM::factory('tasks')
		->from('tasks')
		->find_all();*/
		
		if ($_POST){
			$project_new->name = $_POST['project_name'];
			$project_new->save();
			if($project_new->loaded()){
				//echo '<p>PROJECTS last query: '.$project_new->last_query().'</p>';
				$tasks_new->project_id = $project_new->id;
				$tasks_new->name = $_POST['project_task'];
				$tasks_new->due_at = $_POST['task_due_date'];
				$tasks_new->completed = 0;
				$tasks_new->save();
			}
			if($tasks_new->loaded()){
				//echo '<p>TASKS last query: '.$tasks_new->last_query().'</p>';
			}
			$this->redirect('projects/index');
		}
		
		//$view = VIEW::factory('projects/index')->bind('tasks',$tasks)->bind('projects',$projects);
		$view_grouped = VIEW::factory('projects/index')->bind('tasks_grouped',$tasks_grouped);
		$this->response->body($view_grouped);
		//echo '<p>BASE URL: '.URL::base().'</p>';
	}

}
