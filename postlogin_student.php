<?php
include('root.php');


$stmt = $pdo->query("select * from student where student_id = '".$_POST["password"]."' ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $login = $row['student_id'];
}
if(empty($login)){
    header("Location: student.php");
    $_SESSION['stu'] = "now";
}
else{
    header("Location: getstudent.php?student_id=".$_POST["password"]."");
}

/*
    if( $_POST["password"] == "26632" ){
    }
    else{
        
    }
*/

?>