<?php
include('root.php');

$sql = "UPDATE club  SET names = :names  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'names' => $_POST['names'] ]);

$sql = "UPDATE club  SET groups = :groups  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'groups' => $_POST['groups'] ]);

$sql = "UPDATE club  SET address = :address  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'address' => $_POST['address'] ]);


$sql = "UPDATE club  SET size_get = :size_get  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'size_get' => $_POST['size_get'] ]);

$sql = "UPDATE club  SET status = :status  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'status' => $_POST['status'] ]);

$sql = "UPDATE club  SET class = :class  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'class' => $_POST['class'] ]);

$sql = "UPDATE club  SET room = :room  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'room' => $_POST['room'] ]);

$sql = "UPDATE club  SET teacher1 = :teacher1  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'teacher1' => $_POST['teacher1'] ]);

$sql = "UPDATE club  SET teacher2  = :teacher2  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'teacher2' => $_POST['teacher2'] ]);

$sql = "UPDATE club  SET teacher3  = :teacher3  WHERE club_id = :club_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'club_id' => $_POST['club_id'], 'teacher3' => $_POST['teacher3'] ]);

header("Location: setting1-3.php");
?>