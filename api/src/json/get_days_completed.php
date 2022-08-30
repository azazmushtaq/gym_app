<?php
if(isset($_GET["user_id"]) && isset($_GET["workout_id"])){

if(!empty($_GET["user_id"]) && !empty($_GET["workout_id"])) {
	header('Content-Type: application/json');
	header("access-control-allow-origin: *");

	require '../admin/config.php';

	$connection = mysqli_connect($database['host'],$database['user'], $database['pass'], $database['db'])
	or die("An unexpected error has occurred in the database connection");

	$sql = "SELECT * FROM user_completed_days WHERE user_id = '".$_GET["user_id"]."' AND workout_id = ".$_GET["workout_id"];
	mysqli_set_charset($connection, "utf8");

	if(!$result = mysqli_query($connection, $sql)) die();

	$days_completed = array();
	$id = 0;

	while($row = mysqli_fetch_array($result))
	{
		$days_completed[] = $row['day'];
	}
	$close = mysqli_close($connection)
	or die("An unexpected error has occurred in the disconnection of the database");


	$json_string = json_encode($days_completed);
	print ($json_string);

}


}


?>
