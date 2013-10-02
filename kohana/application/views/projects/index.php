<h4>Create New Project:</h4>

<form id="add_new_project" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

<table cellpadding="2" cellspacing="0" border="1">

<tr><th><label for="project_name">Project Name</label></th><th><label for="project_task">Project Task</label></th><th><label for="task_due_date">Task Due Date</label></th></tr>

<tr>

<td><input id="project_name" name="project_name" type="text" value="<?php (!empty($_POST['project_name'])) ? $_POST['project_name'] : ''; ?>" maxlength="" size="50"></td>

<td><input id="project_task" name="project_task" type="text" value="<?php (!empty($_POST['project_task'])) ? $_POST['project_task'] : ''; ?>" maxlength="" size="50"></td>

<td><input id="task_due_date" name="task_due_date" type="text" value="<?php (!empty($_POST['task_due_date'])) ? $_POST['task_due_date'] : ''; ?>" maxlength="" size="50"></td>

</tr>

<tr>
<td>&nbsp;</td>
<td><input id="submit" name="submit" type="submit" value="Submit"></td>
<td>&nbsp;</td>
</tr>

</table>

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