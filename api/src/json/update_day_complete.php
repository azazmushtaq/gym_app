<?php

if(isset($_GET["user_id"]) && isset($_GET["workout_id"]) && isset($_GET["day"])){

    if(!empty($_GET["user_id"]) && !empty($_GET["workout_id"]) && !empty($_GET["day"])){

?>

<?php

header('Content-Type: application/json');
header("access-control-allow-origin: *");

require '../admin/config.php';

$connection = mysqli_connect($database['host'],$database['user'], $database['pass'], $database['db'])
or die("An unexpected error has occurred in the database connection");



        $query_check = $connection->query("SELECT id FROM user_completed_days WHERE user_id = '".$_GET['user_id']."' AND workout_id = ".$_GET['workout_id']." AND day = ".$_GET['day']);
        $query_check_row = $query_check->fetch_row();

if (!$query_check_row){
    $sql = "INSERT INTO user_completed_days (id,user_id,workout_id, day)
VALUES ( NULL, '".$_GET['user_id']."', ".$_GET['workout_id'].",".$_GET['day'].")";


    mysqli_set_charset($connection, "utf8");

    if ($connection->query($sql) === TRUE) {
        $response = [
            "success" => true,
            "message" => "Day completed"
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "Failed to complete day"
        ];
    }
}else{
    $response = [
        "success" => true,
        "message" => "Already Completed"
    ];
}


        $json_string = json_encode($response);
        print ($json_string);


$close = mysqli_close($connection)
or die("An unexpected error has occurred in the disconnection of the database");


?>

<?php

}}

?>
