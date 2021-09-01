<?php
include('root.php');


for ($x = 1; $x <= 20; $x++) {
$sql = "UPDATE timecheck  SET date = :date  WHERE time_id  = :time_id   ";
$stmt = $pdo->prepare($sql);
    $stmt->execute([ 'time_id' => $x, 'date' => $_POST["date".$x] ]);
    
    $sql = "UPDATE timecheck  SET status = :status  WHERE time_id  = :time_id   ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ 'time_id' => $x, 'status' => $_POST["status".$x] ]);
}

header("Location: setting1-7-timeEdu.php");
?>