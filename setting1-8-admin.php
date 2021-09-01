<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อผู้ดูแลระบบ</title>

    <?php include('root.php');  ?>

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
            <h1>ติดต่อผู้ดูแลระบบ</h1>

            <?php 
                $stmt = $pdo->query("select * from admin where admin_id = 1");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <form action="posteditadmin.php" method="post" enctype="multipart/form-data">
                <!-- <div class="form-control">
                    <div class="form-upload">
                        <label for="file-upload-1">Choose
                            <input type="file" name="txt_file" id="file-upload-1" class="file-upload"
                                accept="image/x-png,image/gif,image/jpeg">
                        </label>
                        <p id="filename-1" class="filename">Profile picture</p>
                    </div>
                </div> -->

                <?php if(isset($_SESSION['msg'])) { ?>
                <h3 style="border: 1px solid #1abc9a; 
                    padding: 10px; background: #befff1; 
                    color: #1abc9a; border-radius: 5px;">
                    <?php 
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']); 
                    ?>
                </h3>        
                <?php } ?>


                <div class="form-control">
                    <label for="name">*คำนำหน้า ชื่อ-สกุล</label>
                    <input type="text" name="names" value="<?php echo $row['names'] ; ?>" name="txt_firstname" class="txt-content" placeholder="" >
                </div>
                <div class="form-control">
                    <label for="name">*เบอร์โทรศัพท์</label>
                    <input type="text" name="tel" value="<?php echo $row['tel'] ; ?>" name="txt_lastname" class="txt-content" placeholder="" >
                </div>

                <div class="form-control">
                    <label for="name">*อีเมล</label>
                    <input type="text" name="email" value="<?php echo $row['email'] ; ?>" name="txt_lastname" class="txt-content" placeholder="" >
                </div>

                <div class="form-control">
                    <label for="name">*สถานที่ติดต่อ</label>
                    <input type="text" name="address" value="<?php echo $row['address'] ; ?>" name="txt_lastname" class="txt-content" placeholder="" >
                </div>
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
    <?php
        }
    ?>     
        </div>

        
    </section>
</body>

</html>