<?php
include('root.php');
$club_id = 0 ;

$stmt = $pdo->query("select * from club ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $club_id = $row['club_id'];
}
$club_id = $club_id + 1 ;

$sql = 'INSERT INTO club (club_id, names, address, groups, size_get, size_in, status, class, room, teacher1, teacher2, teacher3, point_id, activity_id) 
VALUES (:club_id, :names, :address, :groups, :size_get, :size_in, :status, :class, :room, :teacher1, :teacher2, :teacher3, :point_id, :activity_id) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "club_id" => $club_id, 
            "names" =>  $_POST['names'], 
            "address" =>  $_POST['address'], 
            "groups" =>  $_POST['groups'], 
            "size_get" =>  $_POST['size_get'], 
            "size_in" =>  0, 
            "status" =>  $_POST['status'], 
            "class" =>  $_POST['class'], 
            "room" =>  $_POST['room'], 
            "teacher1" =>  $_POST['teacher1'], 
            "teacher2" =>  $_POST['teacher2'], 
            "teacher3" =>  $_POST['teacher3'], 
            "point_id" => "P".$club_id, 
            "activity_id" => "A".$club_id, 

]);


$sql = 'INSERT INTO points (point_id , point1, point2, point3, point4, point5, point6, point7, point8, point9, point10) 
VALUES (:point_id  , :point1, :point2, :point3, :point4, :point5, :point6, :point7, :point8, :point9, :point10) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "point_id" =>  "P".$club_id, 
            "point1" =>  NULL, 
            "point2" =>  NULL, 
            "point3" =>  NULL, 
            "point4" =>  NULL, 
            "point5" =>  NULL, 
            "point6" =>  NULL, 
            "point7" =>  NULL, 
            "point8" =>  NULL, 
            "point9" =>  NULL, 
            "point10" =>  NULL, 
]);

$sql = 'INSERT INTO activity (activity_id , activity1, activity2, activity3, activity4, activity5, activity6, activity7, activity8, activity9, activity10, activity11, activity12, activity13, activity14, activity15, activity16, activity17, activity18, activity19, activity20) 
VALUES (:activity_id  , :activity1, :activity2, :activity3, :activity4, :activity5, :activity6, :activity7, :activity8, :activity9, :activity10, :activity11, :activity12, :activity13, :activity14, :activity15, :activity16, :activity17, :activity18, :activity19, :activity20) ';
$stmt = $pdo->prepare($sql);
$stmt->execute([
            "activity_id" =>  "A".$club_id, 
            "activity1" =>  NULL, 
            "activity2" =>  NULL, 
            "activity3" =>  NULL, 
            "activity4" =>  NULL, 
            "activity5" =>  NULL, 
            "activity6" =>  NULL, 
            "activity7" =>  NULL, 
            "activity8" =>  NULL, 
            "activity9" =>  NULL, 
            "activity10" =>  NULL, 
            "activity11" =>  NULL, 
            "activity12" =>  NULL, 
            "activity13" =>  NULL, 
            "activity14" =>  NULL, 
            "activity15" =>  NULL, 
            "activity16" =>  NULL, 
            "activity17" =>  NULL, 
            "activity18" =>  NULL, 
            "activity19" =>  NULL, 
            "activity20" =>  NULL, 

]);


header("Location: setting1-3.php");
?>