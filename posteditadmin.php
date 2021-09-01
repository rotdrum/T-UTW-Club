<?php
include('root.php');

$sql = "UPDATE admin  SET names = :names  WHERE admin_id = :admin_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'admin_id' => 1, 'names' => $_POST['names'] ]);


$sql = "UPDATE admin  SET tel = :tel  WHERE admin_id = :admin_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'admin_id' => 1, 'tel' => $_POST['tel'] ]);


$sql = "UPDATE admin  SET email = :email  WHERE admin_id = :admin_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'admin_id' => 1, 'email' => $_POST['email'] ]);


$sql = "UPDATE admin  SET address = :address  WHERE admin_id = :admin_id  ";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'admin_id' => 1, 'address' => $_POST['address'] ]);

header("Location: setting1-8-admin.php");
?>