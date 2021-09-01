<?php
include('root.php');

    $sql = "DELETE FROM points WHERE point_id = :point_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['point_id' => "P".$_REQUEST['club_id'] ]);   

    $sql = "DELETE FROM activity WHERE activity_id = :activity_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['activity_id' => "A".$_REQUEST['club_id'] ]);   

    $sql = "DELETE FROM club WHERE club_id = :club_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['club_id' => $_REQUEST['club_id'] ]);   
    
header("Location: setting1-3.php");
?>