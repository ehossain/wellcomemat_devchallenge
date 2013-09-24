<?php
defined('SYSPATH') OR die('No direct access allowed.');

class Model_Tasks extends ORM{
	public function __construct(){
		$this->_table_names_plural = false;
		parent::__construct();
	}
}
