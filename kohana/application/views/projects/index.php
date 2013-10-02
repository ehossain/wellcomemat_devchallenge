<h4>Create New Project:</h4>

<?php echo Form::open('', array('id' => 'add_new_project', 'action' => htmlentities($_SERVER['PHP_SELF']), 'method' => 'post')); ?><!--begin form-->

<table cellpadding="2" cellspacing="0" border="1">

<tr><th><?php echo Form::label('project_name','Project Name'); ?></th><th><?php echo Form::label('project_task','Project Task'); ?></th><th><?php echo Form::label('task_due_date','Task Due Date (YYYY-MM-DD)'); ?></th></tr>

<tr>

<td><?php echo Form::input('project_name',(!empty($_POST['project_name']) ? $_POST['project_name'] : ''), array('id' => 'project_name','type' => 'text','size' => '50','maxlength' => '')); ?></td>

<td><?php echo Form::input('project_task',(!empty($_POST['project_task']) ? $_POST['project_task'] : ''), array('id' => 'project_task','type' => 'text','size' => '50','maxlength' => '')); ?></td>

<td><?php echo Form::input('task_due_date',(!empty($_POST['task_due_date']) ? $_POST['task_due_date'] : ''), array('id' => 'task_due_date','type' => 'text','size' => '50','maxlength' => '')); ?></td>

</tr>

<tr>
<td>&nbsp;</td>
<td><?php echo Form::submit('submit','Submit', array('id' => 'submit')); ?></td>
<td>&nbsp;</td>
</tr>

</table>

<?php echo Form::close(); ?><!--end form-->

<?php

if(!empty($_POST['submit'])){
	echo '<p>The Form was submitted!</p>';
}

?>

<h4>List of Current Projects:</h4>

<table cellpadding="2" cellspacing="0" border="1">

<tr><th>Project Index ID</th><th>Project ID</th><th>Project Name</th><th>Project Task</th><th>Task Due Date</th><th>Task Completed?</th></tr>

<?php

foreach($tasks_grouped as $task){

?>
		<tr>
		
		<td><?php echo (!empty($task->id)) ? $task->id : '&nbsp;'; ?></td>
		<td><?php echo (!empty($task->project_id)) ? $task->project_id : '&nbsp;'; ?></td>
		<td><?php echo (!empty($task->name)) ? '<a href="'.$task->id.'/">'.$task->name.'</a>' : '&nbsp;'; ?></td>
		<td><?php echo (!empty($task->tasks_name)) ? $task->tasks_name : '&nbsp;'; ?></td>
		<td><?php echo (!empty($task->due_at)) ? $task->due_at : '&nbsp;'; ?></td>
		<td><?php
				if($task->completed == 0 || $task->completed == 1){
					if($task->completed == 0){
						echo 'No';
					}
					else if($task->completed == 1){
						echo 'Yes';
					}
				}
				else if(!empty($task->completed)){
						echo $task->completed;
				}
				else{
					echo '&nbsp;';
				}
		
		?></td>
		
		</tr>
<?php
	
}

?>

</table>