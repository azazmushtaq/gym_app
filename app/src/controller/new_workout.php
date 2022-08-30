<?php

session_start();
if (isset($_SESSION['username'])){


require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/navbar.view.php';

$errors = '';

$connect = connect($database);
if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
	}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$exercises_lists1 = $_POST['exercise_id1'];
	$exercises_lists2 = $_POST['exercise_id2'];
	$exercises_lists3 = $_POST['exercise_id3'];
	$exercises_lists4 = $_POST['exercise_id4'];
	$exercises_lists5 = $_POST['exercise_id5'];
	$exercises_lists6 = $_POST['exercise_id6'];
	$exercises_lists7 = $_POST['exercise_id7'];
	$exercises_lists8 = $_POST['exercise_id8'];
	$exercises_lists9 = $_POST['exercise_id9'];
	$exercises_lists10 = $_POST['exercise_id10'];
	$exercises_lists11 = $_POST['exercise_id11'];
	$exercises_lists12 = $_POST['exercise_id12'];
	$exercises_lists13 = $_POST['exercise_id13'];
	$exercises_lists14 = $_POST['exercise_id14'];
	$exercises_lists15 = $_POST['exercise_id15'];
	$exercises_lists16 = $_POST['exercise_id16'];
	$exercises_lists17 = $_POST['exercise_id17'];
	$exercises_lists18 = $_POST['exercise_id18'];
	$exercises_lists19 = $_POST['exercise_id19'];
	$exercises_lists20 = $_POST['exercise_id20'];
	$exercises_lists21 = $_POST['exercise_id21'];
	$exercises_lists22 = $_POST['exercise_id22'];
	$exercises_lists23 = $_POST['exercise_id23'];
	$exercises_lists24 = $_POST['exercise_id24'];
	$exercises_lists25 = $_POST['exercise_id25'];
	$exercises_lists26 = $_POST['exercise_id26'];
	$exercises_lists27 = $_POST['exercise_id27'];
	$exercises_lists28 = $_POST['exercise_id28'];
	$exercises_lists29 = $_POST['exercise_id29'];
	$exercises_lists30 = $_POST['exercise_id30'];


	$day1 = cleardata($_POST['day_1']);
	$day2 = cleardata($_POST['day_2']);
	$day3 = cleardata($_POST['day_3']);
	$day4 = cleardata($_POST['day_4']);
	$day5 = cleardata($_POST['day_5']);
	$day6 = cleardata($_POST['day_6']);
	$day7 = cleardata($_POST['day_7']);
	$day8 = cleardata($_POST['day_8']);
	$day9 = cleardata($_POST['day_9']);
	$day10 = cleardata($_POST['day_10']);
	$day11 = cleardata($_POST['day_11']);
	$day12 = cleardata($_POST['day_12']);
	$day13 = cleardata($_POST['day_13']);
	$day14 = cleardata($_POST['day_14']);
	$day15 = cleardata($_POST['day_15']);
	$day16 = cleardata($_POST['day_16']);
	$day17 = cleardata($_POST['day_17']);
	$day18 = cleardata($_POST['day_18']);
	$day19 = cleardata($_POST['day_19']);
	$day20 = cleardata($_POST['day_20']);
	$day21 = cleardata($_POST['day_21']);
	$day22 = cleardata($_POST['day_22']);
	$day23 = cleardata($_POST['day_23']);
	$day24 = cleardata($_POST['day_24']);
	$day25 = cleardata($_POST['day_25']);
	$day26 = cleardata($_POST['day_26']);
	$day27 = cleardata($_POST['day_27']);
	$day28 = cleardata($_POST['day_28']);
	$day29 = cleardata($_POST['day_29']);
	$day30 = cleardata($_POST['day_30']);

	$workout_title = cleardata($_POST['workout_title']);
	$workout_description = $_POST['workout_description'];
	$workout_goal = $_POST['workout_goal'];
	$workout_level = cleardata($_POST['workout_level']);
	$workout_duration = $_POST['workout_duration'];
	$workout_status = $_POST['workout_status'];
	$workout_image = $_FILES['workout_image']['tmp_name'];

	$imagefile = explode(".", $_FILES["workout_image"]["name"]);
	$renamefile = round(microtime(true)) . '.' . end($imagefile);

	$workout_image_upload = '../' . $items_config['images_folder'];

	move_uploaded_file($workout_image, $workout_image_upload . 'workout_' . $renamefile);

	$statment = $connect->prepare(
		'INSERT INTO workouts (workout_id,workout_title,workout_description,workout_goal,workout_level,workout_duration,workout_status,workout_image) VALUES (null, :workout_title, :workout_description, :workout_goal, :workout_level, :workout_duration, :workout_status, :workout_image)'
		);

	$statment->execute(array(
		':workout_title' => $workout_title,
		':workout_description' => $workout_description,
		':workout_goal' => $workout_goal,
		':workout_level' => $workout_level,
		':workout_duration' => $workout_duration,
		':workout_status' => $workout_status,
		':workout_image' => 'workout_' . $renamefile
		));

$statment = $connect->prepare("SELECT @@identity AS id");
$statment->execute();
$resultado = $statment->fetchAll();
$id = 0;
foreach ($resultado as $row) {
        $id = $row["id"];
    }

$statment = $connect->prepare( 'INSERT INTO we_day1 (exercise_id,workout_id,day_1) VALUES (:exercise_id1, :workout_id, :day_1)' );
$statment->bindParam(':exercise_id1', $idexercise1);
$statment->bindParam(':day_1', $day_id_1);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists1 as $option_value1)
{
   $idexercise1 = $option_value1;
   $day_id_1 = $day1;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day2 (exercise_id,workout_id,day_2) VALUES (:exercise_id2, :workout_id, :day_2)' );
$statment->bindParam(':exercise_id2', $idexercise2);
$statment->bindParam(':day_2', $day_id_2);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists2 as $option_value2)
{
   $idexercise2 = $option_value2;
   $day_id_2 = $day2;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day3 (exercise_id,workout_id,day_3) VALUES (:exercise_id3, :workout_id, :day_3)' );
$statment->bindParam(':exercise_id3', $idexercise3);
$statment->bindParam(':day_3', $day_id_3);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists3 as $option_value3)
{
   $idexercise3 = $option_value3;
   $day_id_3 = $day3;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day4 (exercise_id,workout_id,day_4) VALUES (:exercise_id4, :workout_id, :day_4)' );
$statment->bindParam(':exercise_id4', $idexercise4);
$statment->bindParam(':day_4', $day_id_4);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists4 as $option_value4)
{
   $idexercise4 = $option_value4;
   $day_id_4 = $day4;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day5 (exercise_id,workout_id,day_5) VALUES (:exercise_id5, :workout_id, :day_5)' );
$statment->bindParam(':exercise_id5', $idexercise5);
$statment->bindParam(':day_5', $day_id_5);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists5 as $option_value5)
{
   $idexercise5 = $option_value5;
   $day_id_5 = $day5;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day6 (exercise_id,workout_id,day_6) VALUES (:exercise_id6, :workout_id, :day_6)' );
$statment->bindParam(':exercise_id6', $idexercise6);
$statment->bindParam(':day_6', $day_id_6);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists6 as $option_value6)
{
   $idexercise6 = $option_value6;
   $day_id_6 = $day6;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day7 (exercise_id,workout_id,day_7) VALUES (:exercise_id7, :workout_id, :day_7)' );
$statment->bindParam(':exercise_id7', $idexercise7);
$statment->bindParam(':day_7', $day_id_7);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists7 as $option_value7)
{
   $idexercise7 = $option_value7;
   $day_id_7 = $day7;
   $statment->execute();
}


$statment = $connect->prepare( 'INSERT INTO we_day8 (exercise_id,workout_id,day_8) VALUES (:exercise_id8, :workout_id, :day_8)' );
$statment->bindParam(':exercise_id8', $idexercise8);
$statment->bindParam(':day_8', $day_id_8);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists8 as $option_value8)
{
   $idexercise8 = $option_value8;
   $day_id_8 = $day8;
   $statment->execute();
}


$statment = $connect->prepare( 'INSERT INTO we_day9 (exercise_id,workout_id,day_9) VALUES (:exercise_id9, :workout_id, :day_9)' );
$statment->bindParam(':exercise_id9', $idexercise9);
$statment->bindParam(':day_9', $day_id_9);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists9 as $option_value9)
{
   $idexercise9 = $option_value9;
   $day_id_9 = $day9;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day10 (exercise_id,workout_id,day_10) VALUES (:exercise_id10, :workout_id, :day_10)' );
$statment->bindParam(':exercise_id10', $idexercise10);
$statment->bindParam(':day_10', $day_id_10);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists10 as $option_value10)
{
   $idexercise10 = $option_value10;
   $day_id_10 = $day10;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day11 (exercise_id,workout_id,day_11) VALUES (:exercise_id11, :workout_id, :day_11)' );
$statment->bindParam(':exercise_id11', $idexercise11);
$statment->bindParam(':day_11', $day_id_11);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists11 as $option_value11)
{
   $idexercise11 = $option_value11;
   $day_id_11 = $day11;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day12 (exercise_id,workout_id,day_12) VALUES (:exercise_id12, :workout_id, :day_12)' );
$statment->bindParam(':exercise_id12', $idexercise12);
$statment->bindParam(':day_12', $day_id_12);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists12 as $option_value12)
{
   $idexercise12 = $option_value12;
   $day_id_12 = $day12;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day13 (exercise_id,workout_id,day_13) VALUES (:exercise_id13, :workout_id, :day_13)' );
$statment->bindParam(':exercise_id13', $idexercise13);
$statment->bindParam(':day_13', $day_id_13);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists13 as $option_value13)
{
   $idexercise13 = $option_value13;
   $day_id_13 = $day13;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day14 (exercise_id,workout_id,day_14) VALUES (:exercise_id14, :workout_id, :day_14)' );
$statment->bindParam(':exercise_id14', $idexercise14);
$statment->bindParam(':day_14', $day_id_14);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists14 as $option_value14)
{
   $idexercise14 = $option_value14;
   $day_id_14 = $day14;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day15 (exercise_id,workout_id,day_15) VALUES (:exercise_id15, :workout_id, :day_15)' );
$statment->bindParam(':exercise_id15', $idexercise15);
$statment->bindParam(':day_15', $day_id_15);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists15 as $option_value15)
{
   $idexercise15 = $option_value15;
   $day_id_15 = $day15;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day16 (exercise_id,workout_id,day_16) VALUES (:exercise_id16, :workout_id, :day_16)' );
$statment->bindParam(':exercise_id16', $idexercise16);
$statment->bindParam(':day_16', $day_id_16);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists16 as $option_value16)
{
   $idexercise16 = $option_value16;
   $day_id_16 = $day16;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day17 (exercise_id,workout_id,day_17) VALUES (:exercise_id17, :workout_id, :day_17)' );
$statment->bindParam(':exercise_id17', $idexercise17);
$statment->bindParam(':day_17', $day_id_17);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists17 as $option_value17)
{
   $idexercise17 = $option_value17;
   $day_id_17 = $day17;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day18 (exercise_id,workout_id,day_18) VALUES (:exercise_id18, :workout_id, :day_18)' );
$statment->bindParam(':exercise_id18', $idexercise18);
$statment->bindParam(':day_18', $day_id_18);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists18 as $option_value18)
{
   $idexercise18 = $option_value18;
   $day_id_18 = $day18;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day19 (exercise_id,workout_id,day_19) VALUES (:exercise_id19, :workout_id, :day_19)' );
$statment->bindParam(':exercise_id19', $idexercise19);
$statment->bindParam(':day_19', $day_id_19);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists19 as $option_value19)
{
   $idexercise19 = $option_value19;
   $day_id_19 = $day19;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day20 (exercise_id,workout_id,day_20) VALUES (:exercise_id20, :workout_id, :day_20)' );
$statment->bindParam(':exercise_id20', $idexercise20);
$statment->bindParam(':day_20', $day_id_20);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists20 as $option_value20)
{
   $idexercise20 = $option_value20;
   $day_id_20 = $day20;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day21 (exercise_id,workout_id,day_21) VALUES (:exercise_id21, :workout_id, :day_21)' );
$statment->bindParam(':exercise_id21', $idexercise21);
$statment->bindParam(':day_21', $day_id_21);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists21 as $option_value21)
{
   $idexercise21 = $option_value21;
   $day_id_21 = $day21;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day22 (exercise_id,workout_id,day_22) VALUES (:exercise_id22, :workout_id, :day_22)' );
$statment->bindParam(':exercise_id22', $idexercise22);
$statment->bindParam(':day_22', $day_id_22);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists22 as $option_value22)
{
   $idexercise22 = $option_value22;
   $day_id_22 = $day22;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day23 (exercise_id,workout_id,day_23) VALUES (:exercise_id23, :workout_id, :day_23)' );
$statment->bindParam(':exercise_id23', $idexercise23);
$statment->bindParam(':day_23', $day_id_23);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists23 as $option_value23)
{
   $idexercise23 = $option_value23;
   $day_id_23 = $day23;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day24 (exercise_id,workout_id,day_24) VALUES (:exercise_id24, :workout_id, :day_24)' );
$statment->bindParam(':exercise_id24', $idexercise24);
$statment->bindParam(':day_24', $day_id_24);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists24 as $option_value24)
{
   $idexercise24 = $option_value24;
   $day_id_24 = $day24;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day25 (exercise_id,workout_id,day_25) VALUES (:exercise_id25, :workout_id, :day_25)' );
$statment->bindParam(':exercise_id25', $idexercise25);
$statment->bindParam(':day_25', $day_id_25);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists25 as $option_value25)
{
   $idexercise25 = $option_value25;
   $day_id_25 = $day25;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day26 (exercise_id,workout_id,day_26) VALUES (:exercise_id26, :workout_id, :day_26)' );
$statment->bindParam(':exercise_id26', $idexercise26);
$statment->bindParam(':day_26', $day_id_26);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists26 as $option_value26)
{
   $idexercise26 = $option_value26;
   $day_id_26 = $day26;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day27 (exercise_id,workout_id,day_27) VALUES (:exercise_id27, :workout_id, :day_27)' );
$statment->bindParam(':exercise_id27', $idexercise27);
$statment->bindParam(':day_27', $day_id_27);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists27 as $option_value27)
{
   $idexercise27 = $option_value27;
   $day_id_27 = $day27;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day28 (exercise_id,workout_id,day_28) VALUES (:exercise_id28, :workout_id, :day_28)' );
$statment->bindParam(':exercise_id28', $idexercise28);
$statment->bindParam(':day_28', $day_id_28);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists28 as $option_value28)
{
   $idexercise28 = $option_value28;
   $day_id_28 = $day28;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day29 (exercise_id,workout_id,day_29) VALUES (:exercise_id29, :workout_id, :day_29)' );
$statment->bindParam(':exercise_id29', $idexercise29);
$statment->bindParam(':day_29', $day_id_29);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists29 as $option_value29)
{
   $idexercise29 = $option_value29;
   $day_id_29 = $day29;
   $statment->execute();
}

$statment = $connect->prepare( 'INSERT INTO we_day30 (exercise_id,workout_id,day_30) VALUES (:exercise_id30, :workout_id, :day_30)' );
$statment->bindParam(':exercise_id30', $idexercise30);
$statment->bindParam(':day_30', $day_id_30);
$statment->bindParam(':workout_id', $id);

foreach ($exercises_lists30 as $option_value30)
{
   $idexercise30 = $option_value30;
   $day_id_30 = $day30;
   $statment->execute();
}


	header('Location:' . SITE_URL . '/controller/workouts.php');

}



$exercises_lists1 = get_exercises_list($connect);
$exercises_lists2 = get_exercises_list($connect);
$exercises_lists3 = get_exercises_list($connect);
$exercises_lists4 = get_exercises_list($connect);
$exercises_lists5 = get_exercises_list($connect);
$exercises_lists6 = get_exercises_list($connect);
$exercises_lists7 = get_exercises_list($connect);
$exercises_lists8 = get_exercises_list($connect);
$exercises_lists9 = get_exercises_list($connect);
$exercises_lists10 = get_exercises_list($connect);
$exercises_lists11 = get_exercises_list($connect);
$exercises_lists12 = get_exercises_list($connect);
$exercises_lists13 = get_exercises_list($connect);
$exercises_lists14 = get_exercises_list($connect);
$exercises_lists15 = get_exercises_list($connect);
$exercises_lists16 = get_exercises_list($connect);
$exercises_lists17 = get_exercises_list($connect);
$exercises_lists18 = get_exercises_list($connect);
$exercises_lists19 = get_exercises_list($connect);
$exercises_lists20 = get_exercises_list($connect);
$exercises_lists21 = get_exercises_list($connect);
$exercises_lists22 = get_exercises_list($connect);
$exercises_lists23 = get_exercises_list($connect);
$exercises_lists24 = get_exercises_list($connect);
$exercises_lists25 = get_exercises_list($connect);
$exercises_lists26 = get_exercises_list($connect);
$exercises_lists27 = get_exercises_list($connect);
$exercises_lists28 = get_exercises_list($connect);
$exercises_lists29 = get_exercises_list($connect);
$exercises_lists30 = get_exercises_list($connect);




$levels_lists = get_all_levels($connect);
$goals_lists = get_all_goals($connect);

require '../views/new.workout.view.php';
require '../views/footer.view.php';

}else {
		header('Location: ' . SITE_URL . '/controller/login.php');
		}


?>