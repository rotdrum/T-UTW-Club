<?php
include('root.php');

$sql = "UPDATE student  SET names = :names  WHERE student_id = :student_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'student_id' => $_POST['student_id'], 'names' => $_POST['names'] ]);

$sql = "UPDATE student  SET class = :class  WHERE student_id = :student_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'student_id' => $_POST['student_id'], 'class' => $_POST['class'] ]);

$sql = "UPDATE student  SET room = :room  WHERE student_id = :student_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'student_id' => $_POST['student_id'], 'room' => $_POST['room'] ]);

$sql = "UPDATE student  SET ordinal = :ordinal  WHERE student_id = :student_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'student_id' => $_POST['student_id'], 'ordinal' => $_POST['ordinal'] ]);

$sql = "UPDATE student  SET club_id = :club_id  WHERE student_id = :student_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'student_id' => $_POST['student_id'], 'club_id' => $_POST['club_id'] ]);

header("Location: setting1-4.php");
?>