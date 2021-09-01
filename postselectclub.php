<?php
include('root.php');

$stmt = $pdo->query("select * from club where club_id = '".$_POST['club_id']."'");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    if($row['size_in'] < $row['size_get']){
        $sql2 = "UPDATE club  SET size_in = :size_in  WHERE club_id = :club_id  ";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute([ 'club_id' => $_POST['club_id'], 'size_in' => $row['size_in'] + 1 ]);

        $sql2 = "UPDATE student  SET club_id = :club_id  WHERE student_id = :student_id  ";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute([ 'student_id' => $_REQUEST['student_id'], 'club_id' => $_POST['club_id'] ]);

        header("Location: statusPass.php?student_id=".$_REQUEST['student_id']);
    }
    else{
        header("Location: selectclub.php?student_id=".$_REQUEST['student_id']);
        $_SESSION['al'] = "now";
    }
}

/*
$sql = "UPDATE button  SET status = :status  WHERE button_id = :button_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'button_id' => $_POST['button_id'], 'status' => $_POST['status'] ]);
*/

//header("Location: setting1-2.php");
?>