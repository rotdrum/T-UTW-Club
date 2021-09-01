<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลนักเรียน</title>

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
            <h1>เพิ่มข้อมูลนักเรียน</h1>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <label for="name">*Text</label>
                    <input type="text" name="txt_firstname" class="txt-content" placeholder="รหัสชุมนุม" >
                </div>
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

                <div class="btn-manage">
                    <a class="btn btn-delete" href="setting1-4.php">ยกเลิก</a>
                    <button class="btn btn-upload" name="btn_upload">ยืนยัน</button>
                </div>

            </form>
        </div>

        
    </section>
</body>

</html>