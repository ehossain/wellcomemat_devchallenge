<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

	public function action_index(){
		$tasks = ORM::factory('tasks')->find_all();
		$projects = ORM::factory('projects')->find_all();
		$this->response->body('<table cellpadding="2" cellspacing="0" border="1"><tr><th>Project ID</th><th>Project Task</th></tr><tr><td>'.$projects[0]->id.'</td><td>'.$tasks[0]->name.'</td></tr></table>');
		//var_dump($tasks);
	}
	

}
