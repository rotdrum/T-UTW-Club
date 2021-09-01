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
                <h4>ขั้นตอนที่ 5/5 บันทึกเวลาการเข้าร่วมกิจกรรมชุมนุม</h4>
            </div>
        </div>
        <div class="card">

            <h3 style="margin-bottom: 20px;">บันทึกเวลาการเข้าร่วมกิจกรรมชุมนุม</h3>



            <div class="tableResponsive">
                <table class="tableCheckin">
                    <thead>
                        <tr>
                            <th rowspan="2" style="width: 30px;">ลำดับ</th>
                            <th rowspan="2" style="width: 400px;">ชื่อ-สกุล</th>
                            <th rowspan="2" style="width: 60px;">ชั้น</th>
                            <th colspan="10">ผลการประเมินจุดประสงค์ที่</th>
                            <th rowspan="2" style="width: 60px;">ผลการประเมิน</th>
                        </tr>
                        <tr>
                            <th style="width: 25px;">1</th>
                            <th style="width: 25px;">2</th>
                            <th style="width: 25px;">3</th>
                            <th style="width: 25px;">4</th>
                            <th style="width: 25px;">5</th>
                            <th style="width: 25px;">6</th>
                            <th style="width: 25px;">7</th>
                            <th style="width: 25px;">8</th>
                            <th style="width: 25px;">9</th>
                            <th style="width: 25px;">10</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;">1</td>
                            <td>นายณัฐเกียรติ ขุนแก้ว</td>
                            <td style="text-align: center;">ม.6/6</td>
                            <td style="text-align: center;">z</td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;">ผ</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
                <a href="teacherReport4.php" class="btn btn-danger">ย้อนกลับ</a>
                <div class="btn btn-info">บันทึก</div>
                <a href="teacherPrintReport.php" class="btn btn-success">ถัดไป</a>
            </div>
        </div>


    </div>

    <?php include('footer.php'); ?>


</body>

</html>