<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

	public function action_index(){
		$tasks = ORM::factory('tasks')->find_all();
		$this->response->body('<p>'.$tasks[0]->name.'</p>');
		//var_dump($tasks);
	}
	

}
