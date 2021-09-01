<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อาจารย์</title>
    
    <?php include('import.php'); ?>
    
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
                    <h1>ส่งผลประเมินกิจกรรมชุมนุม</h1>
                    <h3>โรงเรียนอุทัยวิทยาคม</h3>
                </div>
            </div>

            <!-- right -->
            <div class="card-header-system">
                <h2>ชุมนุมช่างภาพ</h2>
                <h4>ขั้นตอนที่ 1/5 ตั้งค่าชุมนุม</h4>
            </div>
        </div>
        <div class="card">

            <!-- card-control-2 -->
            <div class="card-control-2">
                <!-- item left -->
                <div class="card-control">
                    <label class="lb-control">ภาคเรียนที่</label>
                    <input type="text" class="txt-data" placeholder="ภาคเรียนที่" value="1" disabled>
                </div>
                <!-- items right -->
                <div class="card-control">
                    <label class="lb-control">ปีการศึกษา</label>
                    <input type="text" class="txt-data" placeholder="ปีการศึกษา" value="2564" disabled>
                </div>
            </div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">ชื่อชุมนุม</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" value="ดนตรีไทย" disabled>
            </div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">กลุ่มสาระการเรียนรู้</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" required>
            </div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">เวลาเรียน (ชั่วโมง/สัปดาห์/ภาคเรียน)</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" required disabled>
            </div>


            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">ครูที่ปรึกษาชุมนุม คนที่ 1 (หัวหน้าชุมนุม)</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" required>
            </div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">ครูที่ปรึกษาชุมนุม คนที่ 2</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" required>
            </div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">ครูที่ปรึกษาชุมนุม คนที่ 3</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล" required>
            </div>

            <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
                <a href="index.php" class="btn btn-danger">ย้อนกลับ</a>
                <a href="teacherReport2.php" class="btn btn-success">ถัดไป</a>
            </div>


        </div>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>