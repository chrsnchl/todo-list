<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	echo $task_id;

	require("connect.php");

	$delete = $mysqli->query("DELETE FROM tasks WHERE id='$task_id'");
?>
