<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนชุมนุม</title>

    <?php include('import.php'); ?>
    <?php include('root.php'); ?>

</head>

<body>

<?php 
    $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>

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
            <?php 
    if($row['club_id'] == 0){
    ?>
            <!-- right -->
            <div class="card-header-system">
                <h2>ขั้นตอนที่ 1/3​ : ยืนยันตัวตน</h2>
            </div>
    <?php 
    }  
    else{
    ?>
    <!-- right -->
    <div class="card-header-system">
                <h2>ขั้นตอนที่ 3/3​ : ลงทะเบียนชุมนุมเสร็จสิ้น</h2>
            </div>
    <?php 
    } 
    ?>

        </div>
        <div class="card">

            <div class="lb-form-control">
                <!-- card-control-1 -->
                <div class="lb-items-control">
                    <h3>รหัสนักเรียน</h3>
                    <p>
                    <?php
                    echo $_REQUEST['student_id'];
                    ?>
                    </p>
                </div>

                <!-- card-control-1 -->
                <div class="lb-items-control">
                    <h3>ชื่อ-นามสกุล</h3>
                    <p>
                    <?php
                    echo $row['names'];
                    ?>
                    </p>
                </div>
            </div>


            <div class="lb-form-control">
                <div class="lb-items-control">
                    <h3>ชั้น</h3>
                     ม. 
                    <?php
                    echo $row['class']."/".$row['room'];
                    ?>
                </div>

                <div class="lb-items-control">
                    <h3>เลขที่</h3>
                    <?php
                    echo $row['ordinal'];
                    ?>
                </div>
            </div>



    <?php 
    if($row['club_id'] == 0){
    ?>
            
    <?php 
    }  
    else{
    ?>
         <div class="lb-form-control">
                <div class="lb-items-control">
                    <h3>ชุมนุม</h3>
                    <?php
                    $stmt2 = $pdo->query("select * from club where club_id = '".$row['club_id']."'");
                    while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                        echo $row2['names'];
                    }
                    ?>
                </div>
                <div class="lb-items-control">
                </div>
              
            </div>
    <?php 
    } 
    ?>


            <?php 
    if($row['club_id'] == 0){
    ?>
            <div class="space"></div>

             <h2 class="color-danger">** หมายเหตุ **</h2>
            <p class="color-danger">1. หากนักเรียนบันทึกข้อมูลของผู้อื่น
                เมื่อตรวจสอบพบนักเรียนจะมีโทษทางวินัย</p>
            <p class="color-danger">2. เมื่อกรอกรหัสนักเรียนถูกต้อง แต่ข้อมูลไม่ใช่ของนักเรียน
                ให้ติดต่อผู้ดูแลระบบ</p>

            <div class="space"></div>

    <?php 
    }  
    else{
    ?>
     
    <?php 
    } 
    ?>
           
    <?php 
    $stmt = $pdo->query("select * from admin where admin_id = 1");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <div class="telAdmin">
                <p>ผู้ดูแลระบบ</p>
                <p><?php echo $row['names'] ; ?></p>
                <p>สถานที่ติดต่อ : <?php echo $row['address'] ; ?></p>
                <p>เบอร์โทรศัพท์ : <?php echo $row['tel'] ; ?></p>
                <p>อีเมล : <?php echo $row['email'] ; ?></p>
            </div>
    <?php 
    } 
    ?>

            <?php 
    if($row['club_id'] == 0){
    ?>
          <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
            <a href="student.php" class="btn btn-danger">ไม่ใช่ข้อมูลของฉัน?</a>
            <a href="wait.php?student_id=<?php echo $_REQUEST['student_id']; ?>" class="btn btn-success">ใช่ ฉันเอง!</a>
        </div>

    <?php 
    }  
    else{
    ?>
     <div class="btn-control-row">
            <a href="student.php" class="btn btn-danger">ย้อนกลับ</a>
        </div>
    <?php 
    } 
    ?>

      


    </div>
    </div>

    <?php 
        }
    ?>   


    <?php include('footer.php'); ?>


</body>

</html>