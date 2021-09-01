<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบสถานะการสมัคร</title>

    <?php include('import.php'); ?>
    <?php include('root.php'); ?>


</head>
<body>

    <div class="register">
        <div class="card-header">
            <!-- left -->
            <div class="card-header-logo">
                <div class="header-logo">
                    <img src="img/utw.gif">
                </div>
                <div class="header-title">
                    <h1>ลงทะเบียนชุมนุม</h1>
                    <h3>โรงเรียนอุทัยวิทยาคม</h3>
                </div>
            </div>

            <!-- right -->
            <div class="card-header-system">
                <h2>ขั้นตอนที่ 3/3​ : ตรวจสอบสถานะการสมัคร</h2>
                <?php 
    $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                <h4><?php echo $row['student_id'] ; ?> <?php echo $row['names'] ; ?></h4>
                <?php 
    }
    ?>
            </div>
        </div>
        <div class="card">
            <h1>สมัครสำเร็จ!</h1>
            <div class="card-status">
                <i class="far fa-check-circle pass"></i>
            </div>

            <?php 
    $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                <h3>รหัสนักเรียน : <?php echo $row['student_id'] ; ?></h3>
                <h3>ชื่อ-สกุล : <?php echo $row['names'] ; ?></h3>

                <?php 
                $stmt2 = $pdo->query("select * from club where club_id = '".$row['club_id']."'");
                while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                ?>
                <h3>ชุมนุม : <?php echo $row2['names'] ; ?></h3>
                <?php 
                }
    }
    ?>
         

            <div class="btn-control-row" style="margin-top: 50px;">
                <a href="checkClub.php" class="btn btn-danger">ตรวจสอบชุมนุม</a>
                <a href="index.php" class="btn btn-success">กลับสู่หน้าหลัก</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>