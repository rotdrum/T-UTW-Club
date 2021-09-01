<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกและล้างข้อมูล</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <!-- Sweet alert 2 -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>

        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>บันทึกและล้างข้อมูล</h1>


            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <h3>สำรองไฟล์ประจำปี</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>ข้อมูลนักเรียน</p>
                            <a href="excelStudent.php" class="btn btn-success">Excel</a>
                            <a class="btn btn-warning">PDF</a>

                        </div>
                        <div class="form-control-row">
                            <p>ข้อมูลชุมนุม</p>
                            <a href="excelClub.php"  class="btn btn-success">Excel</a>
                            <a class="btn btn-warning">PDF</a>

                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <h3>ล้างข้อมูลประจำปี (ข้อมูลนักเรียน, ผลลงทะเบียน, สถิติทั้งหมด)</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>กรุณาสำรองไฟล์ก่อน</p>
                            <div class="btn btn-delete" onclick="delete_sureSC()">ลบข้อมูล</div>
                        </div>
                    </div>
                </div>


<!--
                <div class="form-control">
                    <h3>ล้างข้อมูลทั้งหมด</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>กรุณาสำรองไฟล์ก่อน</p>
                            <a class="btn btn-danger" onclick="delete_sureAll()">ลบทั้งหมด</a>
                        </div>
                    </div>
                </div>
-->    
                

                
                <!-- <div class="btn-manage">
                    <button class="btn btn-delete" name="btn_newpatch">New patch</button>
                    <button class="btn btn-upload" name="btn_uppatch">Update patch</button>
                </div> -->

            </form>
        </div>

        
        <script>
         function delete_sureSC() { 
                Swal.fire({
                title: 'คุณแน่ใจว่าต้องการลบข้อมูล?',
                icon: 'info',
                html:   '',
                showCloseButton: true,
                showDenyButton: true,
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton: false,
                denyButtonText: '<a style="text-decoration:none; color: #fff;" href="postdeleteall.php">ลบข้อมูล</a>',
                cancelButtonText: 'ยกเลิก',
                cancelButtonAriaLabel: 'Thumbs down'
                })
            }
            function delete_sureAll() { 
                Swal.fire({
                title: 'คุณแน่ใจว่าต้องการลบทั้งหมด?',
                icon: 'info',
                html:   '',
                showCloseButton: true,
                showDenyButton: true,
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton: false,
                denyButtonText: '<a style="text-decoration:none; color: #fff;" href="setting1-5.php?id=">ลบทั้งหมด</a>',
                cancelButtonText: 'ยกเลิก',
                cancelButtonAriaLabel: 'Thumbs down'
                })
            }
        </script>
    </section>
</body>


</html>