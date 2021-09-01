<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบบันทึกการเข้าร่วมชุมนุม</title>

    

    <!-- CSS -->
    <link rel="stylesheet" href="css/print.css">

</head>
<body>
    <a href="teacherReport5.php" class="btn-back">ย้อนกลับ</a>
    <a href="index.php" class="btn-checkout">ออกจากระบบ</a>

    <div id="report">
        <div class="print-manager">
            <div v-if="pages>=1" class="print-page">หน้า {{ pages }} / {{ limitPages}} </div>
            <div v-if="pages==0" class="print-page">โหมดดูทั้งหมด</div>
            <div class="print-button">
                <button v-on:click="reversePage" class="btn-print"><=</button>
                <button v-on:click="print" class="btn-print">พิมพ์เอกสาร</button>
                <button v-if="pages==0" v-on:click="showAllPages" class="btn-print">โหมดหน้าเดียว</button>
                <button v-if="pages>=1" v-on:click="showAllPages" class="btn-print">ดูทั้งหมด</button>
                <button v-on:click="nextPage" class="btn-print">=></button>
            </div>
        </div>
        
        
        <!------------------------------------------------------------->
        <!-- page 1 -->
        <section class="a4" v-if="pages == 1 || pages == 0">
            <div class="s1">
                <div class="s1-logo">
                    <img src="img/utw.png" alt="">
                </div>
                <h3 class="s1-header">แบบบันทึกการเข้าร่วมกิจกรรมชุมนุม</h3>
            </div>

            <div class="s2">
                <div class="s2-w50 dis-row">
                    <h4>ภาคเรียนที่ </h4>
                    <p>1</p>
                </div>
                <div class="s2-w50 dis-row">
                    <h4>ปีการศึกษา</h4>
                    <p>2563</p>
                </div>
            </div>
            <div class="s2">
                <h4>ชื่อชุมนุม</h4>
                <p>ดนตรี</p>
            </div>
            <div class="s2">
                <h4>กลุ่มสาระการเรียนรู้</h4>
                <p>ภาษาไทย</p>
            </div>
            <div class="s2">
                <h4>เวลาเรียน</h4>
                <p style="margin-right: 20px;">10/20/1</p>
                <h4>ชั่วโมง/สัปดาห์/ภาคเรียน</h4>
            </div>
            <div class="s3">
                <div class="s3-1">
                    <h4>ครูที่ปรึกษา</h4>
                </div>
                <div class="s3-2">
                    <p>1. ณัฐเกียรติ ขุนแก้ว</p>
                    <p>2. ณัฐเกียรติ ขุนแก้ว</p>
                    <p>3. ณัฐเกียรติ ขุนแก้ว</p>
                </div>
            </div>
            
            <table class="tablePassFail">
                <thead>
                    <tr>
                        <th rowspan="3">จำนวนนักเรียนทั้งหมด</th>
                        <th colspan="2">สรุปผลการเรียน</th>
                    </tr>
                    <tr>
                        <th colspan="2">จำนวนนักเรียนที่ได้ระดับผลการเรียน</th>
                    </tr>
                    <tr>
                        <th>ผ่าน</th>
                        <th>ไม่ผ่าน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>50 คน</td>
                        <td>49 คน</td>
                        <td>1 คน</td>
                    </tr>
                </tbody>
            </table>

            <div class="s1">
                <p>อนุมัติผลการเรียน</p>
            </div>

            
            <div class="signature">
                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>หัวหน้าชุมนุม</p>
                </div>

                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>หัวหน้ากิจกรรมชุมนุม</p>
                </div>
            </div>

            <div class="signature">
                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>หัวหน้ากิจกรรมพัฒนาผู้เรียน</p>
                </div>

                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>งานวัดประเมินผล</p>
                </div>
            </div>

            <div class="signature" >
                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>รองผู้อำนวยการโรงเรียนฝ่ายวิชาการ</p>
                </div>

                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>ผู้อำนวยการโรงเรียน</p>
                </div>
            </div>

        </section>


        <hr>

        <!------------------------------------------------------------->
        <!-- page 2 -->
        <section class="a4" v-if="pages == 2 || pages == 0">
            <h3 style="margin-bottom: 20px;">แบบบันทึกเวลาการเข้าร่วมกิจกรรมชุมนุม</h3>

            <table style="font-size: 10px;" class="tableCheckin">
                <thead>
                    <tr>
                        <th rowspan="3">ลำดับ</th>
                        <th rowspan="3" style="width: 170px;">ชื่อ-สกุล</th>
                        <th rowspan="3" style="width: 40px;">ชั้น</th>
                        <th colspan="20">สัปดาห์ที่</th>
                        <th rowspan="3">ผลการเข้าเรียน</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                    </tr>
                    <tr>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                        <th class="th-date">
                            <p style="transform: rotate(-90deg);">050464</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.3/6</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        <td>4.00</td>
                    </tr>
                </tbody>
            </table>

            <p class="text-left">หมายเหตุ ** นักเรียนต้องเข้าร่วมกิจกรรมไม่ต่ำกว่า 80% ของเวลาเรียนทั้งหมด</p>
        
            <div class="signature signature-float-right">

                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>ผู้ตรวจทาน</p>
                </div>
            </div>
        </section>


        <hr>

        <!------------------------------------------------------------->
        <!-- page 3 -->
        <section class="a4" v-if="pages == 3 || pages == 0">
            <h3 style="margin-bottom: 20px;">แบบบันทึกผลการประเมินกิจกรรมชุมนุม</h3>
            <table class="tableCheckin">
                <thead>
                    <tr>
                        <th rowspan="2">ลำดับ</th>
                        <th rowspan="2" style="width: 150px;">ชื่อ-สกุล</th>
                        <th rowspan="2">ชั้น</th>
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
                <tbody style="font-size: 12px;">
                    <tr>
                        <td>1</td>
                        <td>นายณัฐเกียรติ ขุนแก้ว</td>
                        <td>ม.6/6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>มผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>ผ</td>
                    </tr>
                </tbody>
            </table>

            <p class="text-left">หมายเหตุ ** นักเรียนต้องผ่านจุดประสงค์ตามที่สถานศึกษากำหนด</p>

            <div class="signature signature-float-right">
                <div class="signature-items">
                    <p>ลงชื่อ......................................................</p>
                    <p>(.........................................................)</p>
                    <p>ผู้ตรวจทาน</p>
                </div>
            </div>
        </section>


        <hr>

        <!------------------------------------------------------------->
        <!-- page 4 -->
        <section class="a4" v-if="pages == 4 || pages == 0">
            <h3 style="margin-bottom: 20px;"> จุดประสงค์</h3>

            <!-- items -->
            <div class="propose">
                <div class="propose-order">
                    1.
                </div>
                <div class="propose-detail">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sit cumque ea, expedita sapiente, fuga architecto ratione veritatis dolorum porro optio qui. Perspiciatis, quae ipsam.
                </div>
            </div>

            <!-- items -->
            <div class="propose">
                <div class="propose-order">
                    2.
                </div>
                <div class="propose-detail">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sit cumque ea, expedita sapiente, fuga architecto ratione veritatis dolorum porro optio qui. Perspiciatis, quae ipsam.
                </div>
            </div>
        </section>
    

        <hr>

        <!------------------------------------------------------------->
        <!-- page 5 -->
        <div class="a4" v-if="pages == 5 || pages == 0">
            <h3 style="margin-bottom: 20px;">แผนการปฏิบัติกิจกรรมชุมนุม</h3>

            <table class="tableCheckin">
                <thead>
                    <tr>
                        <th style="width: 60px;">ชั่วโมงที่</th>
                        <th>รายการปฏิบัติกิจกรรม / ชื่อกิจกรรม</th>
                        <th style="width: 80px;">หมายเหตุ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non iure natus officia inventore tempora atque eum excepturi nobis dolor pariatur, odit maiores aspernatur facilis eaque recusandae debitis velit temporibus. Laudantium temporibus minima itaque numquam repellat sint? Soluta sint qui ea deserunt, excepturi officiis quia illum tempora repellat id reprehenderit? Voluptate.</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="js/vue-print.js"></script>
    
</body>
</html>