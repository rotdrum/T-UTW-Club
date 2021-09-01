<?php
include('root.php');
session_start();

$sql = "UPDATE setting  SET data = :data  WHERE setting_id = :setting_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'setting_id' => 1, 'data' => $_POST['data1'] ]);

$sql = "UPDATE setting  SET data = :data  WHERE setting_id = :setting_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'setting_id' => 2, 'data' => $_POST['data2'] ]);

if($stmt->execute()) {
    $_SESSION['msg'] = "บันทึกข้อมูลสำเร็จ";
}

header("Location: setting1-1.php");
?>