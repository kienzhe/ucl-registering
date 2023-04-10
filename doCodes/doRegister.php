<?php 
include("../includes/dbcon.php");
$year = $_POST["year"];
$month = $_POST["month"];
$conversation = $_POST["time"];
$campus = $_POST["campus"];
$education = $_POST["education"];
$person_type = $_POST["gender"];
$inquiry = $_POST["inquiry"];
$topics = $_POST["topics"];

$topic_string = "";
foreach($topics as $key => $topic){
    $topic_string .= "$topic";
    if($key !== array_key_last($topics)){
        $topic_string .= ";";
    }   
}
$user = $_SESSION['idUser'];
$sql = "INSERT INTO registration (year, month, conversation, person_type, inquiry_type, educations_id, campus_id, counselor_id, topics_id)
VALUES ('$year', '$month', '$conversation', '$person_type', '$inquiry', '$education', '$campus', '$user', '$topic_string')";


if ($dbCon->query($sql) === TRUE) {
      header('LOCATION:/vejleder/registration.php?s=registration'); 
} else {
          header('LOCATION:/vejleder/registration.php?f=registration');
}
?>