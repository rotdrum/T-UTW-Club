<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาชุมนุม</title>
    
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
                <h2>ค้นหาชุมนุม</h2>
            </div>
        </div>
        <div class="card">

            <!-- card-control-3 -->
            <div class="card-control-3">
                <label class="lb-control">เลือกชุมนุมที่ต้องการ</label>
                <select class="sel-data">
                    <option value="">--- เลือก ---</option>
                </select>
            </div>

            <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
                <a class="btn btn-danger" href="index.php">ยกเลิก</a>
                <a class="btn btn-success" href=".php">ค้นหา</a>
            </div>


        </div>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>