<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนชุมนุม</title>

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
                <h2>ขั้นตอนที่ 1/3​ : สมัครสมาชิก</h2>
            </div>
        </div>
        <div class="card">

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">card-control-1</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล">
            </div>

            <!-- card-control-2 -->
            <div class="card-control-2">
                <!-- item left -->
                <div class="card-control">
                    <label class="lb-control">card-control-2</label>
                    <input type="text" class="txt-data" placeholder="กรอกข้อมูล">
                </div>
                <!-- items right -->
                <div class="card-control">
                    <label class="lb-control">card-control-2</label>
                    <input type="text" class="txt-data" placeholder="กรอกข้อมูล">
                </div>
            </div>

            <!-- card-control-3 -->
            <div class="card-control-3">
                <label class="lb-control">card-control-3</label>
                <select class="sel-data">
                    <option value="">--- select ---</option>
                </select>
            </div>

            <!-- card-control-4 -->
            <div class="card-control-4">
                <!-- items left -->
                <div class="card-control">
                    <label class="lb-control">card-control-4</label>
                    <select class="sel-data">
                        <option value="">--- select ---</option>
                    </select>
                </div>
                <!-- items right -->
                <div class="card-control">
                    <label class="lb-control">card-control-4</label>
                    <select class="sel-data">
                        <option value="">--- select ---</option>
                    </select>
                </div>
            </div>

            <!-- if want to margin up and down -->
            <div class="space"></div>

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">card-control-1</label>
                <input type="text" class="txt-data" placeholder="กรอกข้อมูล">
            </div>

            <!-- margin top-down -->
            <div class="space"></div>


            <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
                <a href="wait.php" class="btn btn-danger">.btn-danger</a>
                <a href="#" class="btn btn-warning">.btn-warning</a>
                <button class="btn btn-success">.btn-success</button>
                <button class="btn btn-info">.btn-info</button>
            </div>


        </div>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>