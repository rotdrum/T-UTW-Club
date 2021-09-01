<?php
include('root.php');


$sql = "UPDATE manager  SET fname = :fname  WHERE manager_id  = :manager_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'manager_id' => $_POST['manager_id'], 'fname' => $_POST['fname'] ]);

$sql = "UPDATE manager  SET position = :position  WHERE manager_id = :manager_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'manager_id' => $_POST['manager_id'], 'position' => $_POST['position'] ]);

header("Location: setting1-6.php");
?>