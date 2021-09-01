<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปีการศึกษา</title>

    <?php include('root.php'); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

</head>

<body>  
  
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>
        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>บันทึกเวลาเรียน</h1>

            
            <form action="postupdatetime.php" method="post" enctype="multipart/form-data">
                <!-- <div class="form-control">
                    <div class="form-upload">
                        <label for="file-upload-1">Choose
                            <input type="file" name="txt_file" id="file-upload-1" class="file-upload"
                                accept="image/x-png,image/gif,image/jpeg">
                        </label>
                        <p id="filename-1" class="filename">Profile picture</p>
                    </div>
                </div> -->
            <?php
                $stmt = $pdo->query("select * from timecheck where time_id = 1");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 1</label>
                    <input type="text" name="date1" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status1" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>

<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 2");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 2</label>
                    <input type="text" name="date2" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status2" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 3");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 3</label>
                    <input type="text" name="date3" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status3" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 4");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 4</label>
                    <input type="text" name="date4" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status4" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 5");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 5</label>
                    <input type="text" name="date5" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status5" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 6");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 6</label>
                    <input type="text" name="date6" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status6" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 7");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 7</label>
                    <input type="text" name="date7" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status7" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 8");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 8</label>
                    <input type="text" name="date8" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status8" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 9");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 9</label>
                    <input type="text" name="date9" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status9" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 10");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 10</label>
                    <input type="text" name="date10" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status10" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 11");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 11</label>
                    <input type="text" name="date11" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status11" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 12");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 12</label>
                    <input type="text" name="date12" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status12" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 13");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 13</label>
                    <input type="text" name="date13" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status13" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 14");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 14</label>
                    <input type="text" name="date14" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status14" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>

<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 15");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 15</label>
                    <input type="text" name="date15" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status15" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 16");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 16</label>
                    <input type="text" name="date16" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status16" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 17");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 17</label>
                    <input type="text" name="date17" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status17" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 18");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 18</label>
                    <input type="text" name="date18" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status18" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>


<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 19");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 19</label>
                    <input type="text" name="date19" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status19" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>

<?php
                $stmt = $pdo->query("select * from timecheck where time_id = 20");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
                <div class="form-control">
                    <label for="name">*ครั้งที่ 20</label>
                    <input type="text" name="date20" value="<?php echo $row['date'] ; ?>" name="txt_firstname" class="txt-content" placeholder="กรอก วัน/เดือน/ปี" >
                    <select class="sel-content" name="status20" >
                        <option value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
                        <option value="วันเรียนปกติ">วันเรียนปกติ</option>
                        <option value="วันสอบกลางภาค">วันสอบกลางภาค</option>
                        <option value="วันสอบปลายภาค">วันสอบปลายภาค</option>
                        <option value="วันหยุดราชการ">วันหยุดราชการ</option>
                        <option value="วันหยุดพิเศษ">วันหยุดพิเศษ</option>
                    </select>
                </div>
            <?php
                }
            ?>

                <!-- <div class="form-control">
                    <label for="name">*Position</label>
                    <select class="sel-content" name="sel_position" >
                        <option value="">--- select ---</option>
                        <option value="Frontend developer">Frontend developer</option>
                        <option value="Backend developer">Backend developer</option>
                        <option value="Tester">Tester</option>
                        <option value="Fullstack">Fullstack</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Designer">Designer</option>
                    </select>
                </div> -->

                <button class="btn btn-info" name="btn_upload">ตั้งค่า</button>
            </form>
        </div>

        
    </section>
</body>

</html>