<!DOCTYPE html>
<html lang="en">

<head>
<?php include('root.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลนักเรียน</title>

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
            <h1>แก้ไขข้อมูลนักเรียน</h1>

            <?php 
                $stmt = $pdo->query("select * from student where student_id = ".$_REQUEST['student_id']." ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="posteditstudent.php" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <input required type="hidden" value="<?php echo $row['student_id'] ; ?>" name="student_id" class="txt-content" placeholder="รหัสนักเรียน" >
                </div>
                <div class="form-control">
                    <label for="name">*คำนำหน้า ชื่อ-นามสกุล </label>
                    <input required type="text" value="<?php echo $row['names'] ; ?>" name="names" class="txt-content" placeholder="คำนำหน้า ชื่อ-นามสกุล" >
                </div>
                <div class="form-control">
                    <label for="name">*เลขที่</label>
                    <input required type="number" value="<?php echo $row['ordinal'] ; ?>"  name="ordinal" class="txt-content" placeholder="เลขที่" >
                </div>

                <div class="form-control">
                    <label for="name">*ชั้น</label>
                    <input required type="number" value="<?php echo $row['class'] ; ?>" name="class" class="txt-content" placeholder="ชั้น" >
                </div>

                <div class="form-control">
                    <label for="name">*ห้อง</label>
                    <input required type="number" value="<?php echo $row['room'] ; ?>" name="room" class="txt-content" placeholder="ห้อง" >
                </div>

                <div class="form-control">
                    <label for="name">*เลือกชุมนุม</label>
                    <select class="sel-content" name="club_id" >
                        <option value="<?php echo $row['club_id'] ; ?>"><?php echo $row['club_id'] ; ?></option>
                    </select>
                </div>

                <div class="btn-manage">
                    <a class="btn btn-delete" href="setting1-4.php">ยกเลิก</a>
                    <button class="btn btn-info" name="btn_upload">บันทึก</button>
                </div>

            </form>
            <?php 
                 }
            ?>  
        </div>

        
    </section>
</body>

</html>