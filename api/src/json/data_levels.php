<?php

header('Content-Type: application/json');
header("access-control-allow-origin: *");

require '../admin/config.php';

$connection = mysqli_connect($database['host'],$database['user'], $database['pass'], $database['db']) 
or die("An unexpected error has occurred in the database connection");

$sql = "SELECT * FROM levels";
mysqli_set_charset($connection, "utf8");

if(!$result = mysqli_query($connection, $sql)) die();

$levels = array();
$id = 0;

$user_id = $_GET['user_id'];

while($row = mysqli_fetch_array($result))
{
	$level_id = $row['level_id'];
    $level_title = $row['level_title'];
    $level_image = $row['level_image'];

	$sql_started = "SELECT * FROM user_completed_levels WHERE user_id='".$user_id."' AND level_id=".$level_id;

	$data_result = mysqli_query($connection, $sql_started);

	$count_records = mysqli_num_rows ($data_result);

	if ($id == 0){
		$isCompleted = true;
	}else{
		if ($count_records > 0){
//			$row_data = mysqli_fetch_array($data_result);
//			if ()
			$isCompleted = true;

	}else{
			$isCompleted = false;
		}
	}



    $levels[] = array(
    	'id'=> $id++,
    	'level_id'=> $level_id,
    	'level_title'=> $level_title,
    	'level_image'=> $level_image,
    	'isCompleted'=> $isCompleted,
    	);

}

$close = mysqli_close($connection) 
or die("An unexpected error has occurred in the disconnection of the database");
  

$json_string = json_encode($levels);
//print ("This should be printed instead of array now");
print ($json_string)

?>
