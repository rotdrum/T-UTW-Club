<!DOCTYPE html>
<html lang="en">

<head>
<?php include('root.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลผู้ตรวจเอกสาร</title>

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
            <h1>แก้ไขข้อมูลผู้ตรวจเอกสาร</h1>

            <?php 
                $stmt = $pdo->query("select * from manager where manager_id = ".$_REQUEST['manager_id']." ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="postmanageredit.php" method="post" enctype="multipart/form-data">

            <div class="form-control">
                    <input type="hidden"  class="txt-content" name="manager_id" value="<?php echo $row['manager_id'] ; ?>" >
                </div>


            <div class="form-control">
                    <label for="name">*ชื่อ-นามสกุล</label>
                    <input type="text"  class="txt-content" name="fname" value="<?php echo $row['fname'] ; ?>" >
                </div>

                <div class="form-control">
                    <label for="name">*ตำแหน่ง</label>
                    <input type="text"  class="txt-content" name="position" value="<?php echo $row['position'] ; ?>" >
                </div>

                <div class="btn-manage">
                    <a class="btn btn-delete" href="setting1-6.php">ยกเลิก</a>
                    <button class="btn btn-upload" name="btn_upload">ยืนยัน</button>
                </div>


            <!--
                <div class="form-control">
                    <label for="name">*Select</label>
                    <select class="sel-content" name="sel_position" >
                        <option value="">--- select ---</option>
                        <option value="Frontend developer">Frontend developer</option>
                        <option value="Backend developer">Backend developer</option>
                        <option value="Tester">Tester</option>
                        <option value="Fullstack">Fullstack</option>
                        <option value="Supporter">Supporter</option>
                        <option value="Designer">Designer</option>
                    </select>
                </div>
-->
               
            </form>
            <?php 
                 }
            ?>  
        </div>

        
    </section>
</body>

</html>