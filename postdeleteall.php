<?php
include('root.php');


$stmt = $pdo->query("select * from student ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $sql2 = "DELETE FROM checkstudent WHERE check_id  = :check_id  ";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(['check_id' =>$row['check_id'] ]); 

    $sql3 = "DELETE FROM student WHERE student_id = :student_id ";
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->execute(['student_id' =>$row['student_id'] ]);   
}

/*
$sql = "DELETE FROM ชื่อตาราง WHERE รหัสข้อมูล = :รหัสข้อมูล ";
$stmt = $pdo->prepare($sql);
$stmt->execute(['รหัสข้อมูล' =>$ข้อมูลจากฟอร์มกรอก ]);   
*/

header("Location: setting1-5.php");
?>