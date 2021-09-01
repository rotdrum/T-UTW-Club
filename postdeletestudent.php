<?php
include('root.php');

    $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $sql = "DELETE FROM checkstudent WHERE check_id = :check_id ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['check_id' => "CE".$_REQUEST['student_id'] ]);   
    }

    $sql = "DELETE FROM student WHERE student_id = :student_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['student_id' => $_REQUEST['student_id'] ]);   

    
header("Location: setting1-4.php");
?>