<p>List of Projects</p>

<table cellpadding="2" cellspacing="0" border="1">

<tr><th>Project ID</th><th>Project Task</th><th>Project Due Date</th><th>Project Completed?</th></tr>

<?php
foreach ($tasks as $task){

?>
<tr>

<td><?php echo $task->project_id ?></td>
<td><?php echo $task->name ?></td>
<td><?php echo $task->due_at ?></td>
<td><?php echo $task->completed ?></td>

</tr>
<?php
}
?>

</table>