<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบสถานะการสมัคร</title>

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
                    <h1>ลงทะเบียนชุมนุม</h1>
                    <h3>โรงเรียนอุทัยวิทยาคม</h3>
                </div>
            </div>

            <!-- right -->
            <div class="card-header-system">
                <h2>ขั้นตอนที่ 3/3​ : ตรวจสอบสถานะการสมัคร</h2>
                <h4>นายอนันต์ ฐะปัตชะเย</h4>
            </div>
        </div>
        <div class="card">
            <h1>สมัครล้มเหลว!</h1>
            <div class="card-status pass">
                <i class="fas fa-exclamation-triangle fail"></i>
            </div>

            <h3>ชุมนุมเต็มแล้ว โปรดตรวจสอบชุมนุมใหม่</h3>

            <div class="btn-control-row" style="margin-top: 50px;">
                <a href="checkClub.php" class="btn btn-danger">กลับสู่หน้าหลัก</a>
                <a href="index.php" class="btn btn-success">เลือกอีกครั้ง</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>