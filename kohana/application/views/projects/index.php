<h4>List of Projects:</h4>

<table cellpadding="2" cellspacing="0" border="1">

<tr><th>Project Index ID</th><th>Project ID</th><th>Project Name</th><th>Project Task</th><th>Task Due Date</th><th>Task Completed?</th></tr>

<?php

foreach($tasks as $task){
	
	foreach($projects as $project){
		if($project->id == $task->project_id){
			
?>
			<tr>
			
			<td><?php echo $project->id ?></td>
			<td><?php echo $task->project_id ?></td>
			<td><?php echo $project->name ?></td>
			<td><?php echo $task->name ?></td>
			<td><?php echo $task->due_at ?></td>
			<td><?php echo $task->completed ?></td>
			
			</tr>
<?php
			
		}
		
	}
	
}

?>

</table>