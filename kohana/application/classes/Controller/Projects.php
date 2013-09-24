<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

	public function action_index(){
		$tasks = ORM::factory('tasks')->find_all();
		$view = VIEW::factory('projects/index')->bind('tasks',$tasks);
		$projects = ORM::factory('projects')->find_all();
		/*$this->response->body('<table cellpadding="2" cellspacing="0" border="1">
		<tr><th>Project ID</th><th>Project Name</th><th>Project Task</th><th>Project Due Date</th><th>Project Completed?</th></tr>
		<tr><td>'.$tasks[7]->id.'</td><td>'.$projects[7]->name.'</td><td>'.$tasks[7]->name.'</td><td>'.$tasks[7]->due_at.'</td><td>'.$tasks[7]->completed.'</td></tr>
		</table>');*/
		$this->response->body($view);
		//var_dump($tasks);
	}
	

}
