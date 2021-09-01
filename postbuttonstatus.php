<?php
include('root.php');

$sql = "UPDATE button  SET status = :status  WHERE button_id = :button_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'button_id' => $_POST['button_id'], 'status' => $_POST['status'] ]);

header("Location: setting1-2.php");
?>