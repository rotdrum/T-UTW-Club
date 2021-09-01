<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลชุมนุม</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>
        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>เพิ่มข้อมูลชุมนุม</h1>

            <form action="postAddClub.php" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <label for="name">*ชื่อชุมนุม</label>
                    <input required type="text" name="names" class="txt-content" placeholder="ชื่อชุมนุม" >
                </div>

                <div class="form-control">
                    <label for="name">กลุ่มสาระการเรียนรู้ ( ไม่บังคับ )</label>
                    <input  type="text" name="groups" class="txt-content" placeholder="กลุ่มสาระการเรียนรู้" >
                </div>
                

                <div class="form-control">
                    <label for="name">*สถานที่</label>
                    <input required type="text" name="address" class="txt-content" placeholder="สถานที่" >
                </div>
           
                <div class="form-control">
                    <label for="name">*จำนวนคนที่รับสมัคร</label>
                    <input required type="number" name="size_get" class="txt-content" placeholder="จำนวนที่รับสมัคร" >
                </div>

                <div class="form-control">
                    <label for="name">*จำแนกรายชั้นเรียน</label>
                    <select id="stutus" required class="txt-content" name="status">
                        <option value="0">ไม่จำกัดชั้นเรียน</option>
                        <option value="9">บังคับเลือก รายห้อง</option>
                        <option value="11">มัธยมศึกษาตอนต้น</option>
                        <option value="12">มัธยมศึกษาตอนปลาย</option>
                        <option value="1">มัธยมศึกษาปีที่ 1</option>
                        <option value="2">มัธยมศึกษาปีที่ 2</option>
                        <option value="3">มัธยมศึกษาปีที่ 3</option>
                        <option value="4">มัธยมศึกษาปีที่ 4</option>
                        <option value="5">มัธยมศึกษาปีที่ 5</option>
                        <option value="6">มัธยมศึกษาปีที่ 6</option>
                    </select>
                </div>

                <div class="form-control" id="class">
                    <label for="name">*ชั้น</label>
                    <select  required class="txt-content" name="class" >
                    <option  value="0">---------เลือก------------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>

                <div class="form-control" id="room">
                    <label for="name">*ห้อง</label>
                    <select  required class="txt-content" name="room" >
                        <option value="0">---------เลือก------------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>


                <div class="form-control">
                    <label for="name">หัวหน้าชุมนุม ( ไม่บังคับ )</label>
                    <input required type="text" name="teacher1" class="txt-content" placeholder="หัวหน้าชุมนุม" >
                </div>

                <div class="form-control">
                    <label for="name">ครูที่ปรึกษาชุมนุม ( ไม่บังคับ )</label>
                    <input  type="text" name="teacher2" class="txt-content" placeholder="ครูที่ปรึกษาชุมนุม" >
                </div>


                <div class="form-control">
                    <label for="name">ครูที่ปรึกษาชุมนุม ( ไม่บังคับ )</label>
                    <input  type="text" name="teacher3" class="txt-content" placeholder="ครูที่ปรึกษาชุมนุม" >
                </div>


                <div class="btn-manage">
                    <a class="btn btn-delete" href="setting1-3.php">ยกเลิก</a>
                    <button class="btn btn-upload" name="btn_upload">ยืนยัน</button>
                </div>

            </form>
        </div>

        
    </section>
</body>
<script>

$('#class').hide() ;
$('#room').hide() ;

   $('#stutus').change(function() {
        if( $('#stutus').val() == "9"){
            $('#class').show() ;
            $('#room').show() ;
        }   
        else{
            $('#class').hide() ;
            $('#room').hide() ;
        }
    });
</script>

</html>