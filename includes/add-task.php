<?php 
	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');


	require("connect.php");

	$insert = $mysqli->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

	/*$result = $mysqli->query("SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time'");

	while( $row = $result->fetch_assoc()) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
	}

	mysql_close();

	echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';*/

?>
