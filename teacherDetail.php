<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบชุมนุม</title>

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
                <h2>ชุมนุมดนตรี</h2>
                <h4 id="currentTime"></h4>
            </div>
        </div>
        <form class="card">
            <div class="card-reason">
                <!-- items -->
                <div class="search-control" style="margin-bottom: 0">
                    <div class="search-control-label">
                        <label>เลือกเอกสารที่ต้องการ</label>
                        <label></label>
                    </div>
                    <select class="sel-filter">
                        <option value="">--- เลือก ---</option>
                        <option value="">--- เลือก ---</option>
                        <option value="">--- เลือก ---</option>
                        <option value="">--- เลือก ---</option>
                    </select>
                    <button class="btn btn-success">ค้นหา</button>
                </div>

                <!-- items -->
                <div class="search-control" style="margin-bottom: 0">
                    <button class="btn btn-warning">พิมพ์เอกสารหมายเลข 1</button>
                    <div class="search-control-label">
                        <label>เอกสารเช็คชื่อนักเรียน</label>
                        <label></label>
                    </div>
                </div>

                
            </div>
            <table class="card-club">
                <thead>
                    <tr>
                        <th>ชื่อชุมนุม</th>
                        <th>สถานะ</th>
                        <th>สถานที่เรียน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C001 กรุณารอจนกว่าจะหมดเวลา</td>
                        <td class="color-success">เหลืออีก 5 คน</td>
                        <td>คลองถม</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="color-success">เหลืออีก 5 คน</td>
                        <td>คลองถม</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="color-danger">เต็มแล้ว</td>
                        <td>คลองถม</td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-control-row" style="margin-top: 50px;">
                <a href="index.php" class="btn btn-danger">กลับหน้าหลัก</a>
            </div>
        </form>

        
    </div>

    <?php include('footer.php'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Current time now -->
    <script>
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        console.log(time);
        document.getElementById("currentTime").innerHTML = "ณ​ เวลา " + time;
    </script>


</body>
</html>

