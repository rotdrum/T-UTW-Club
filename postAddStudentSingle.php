<?php
include('root.php');

$sql = 'INSERT INTO student (student_id , names, class, room, ordinal, club_id, check_id) 
VALUES (:student_id  , :names, :class, :room, :ordinal, :club_id, :check_id) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "student_id" =>  $_POST['student_id'], 
            "names" =>  $_POST['names'], 
            "class" =>  $_POST['class'], 
            "room" =>  $_POST['room'], 
            "ordinal" =>  $_POST['ordinal'], 
            "club_id" =>  $_POST['club_id'], 
            "check_id" => "CE".$_POST['student_id']
]);


$sql = 'INSERT INTO checkstudent (check_id , time1, time2, time3, time4, time5, time6, time7, time8, time9, time10, time11, time12, time13, time14, time15, time16, time17, time18, time19, time20) 
VALUES (:check_id  , :time1, :time2, :time3, :time4, :time5, :time6, :time7, :time8, :time9, :time10, :time11, :time12, :time13, :time14, :time15, :time16, :time17, :time18, :time19, :time20) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "check_id" =>  "CE".$_POST['student_id'], 
            "time1" =>  9, 
            "time2" =>  9, 
            "time3" =>  9, 
            "time4" =>  9, 
            "time5" =>  9, 
            "time6" =>  9, 
            "time7" =>  9, 
            "time8" =>  9, 
            "time9" =>  9, 
            "time10" =>  9, 
            "time11" =>  9, 
            "time12" =>  9, 
            "time13" =>  9, 
            "time14" =>  9, 
            "time15" =>  9, 
            "time16" =>  9, 
            "time17" =>  9, 
            "time18" =>  9, 
            "time19" =>  9, 
            "time20" =>  9, 
]);


header("Location: setting1-4.php");
?>