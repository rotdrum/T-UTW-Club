<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตรวจสอบชุมนุม</title>

    <?php include('import.php'); ?>
    <?php include('root.php'); ?>

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
                <h2>ตรวจสอบชุมนุม</h2>
                <h4 id="currentTime"></h4>
            </div>
        </div>
        <form class="card"  method="post" action="checkClubSreach.php">
            <div class="card-reason">
                <div class="search-control">
                    <div class="search-control-label">
                        <label>ค้นข้อมูลจากรหัสนักเรียน : </label>
                        <label>(สำหรับผู้ที่ลงทะเบียนแล้ว)</label>
                    </div>
                    <input type="search" maxlength="5"  name="student_id" class="search-form" placeholder="กรอกรหัสนักเรียน">
                    <button class="btn btn-success">ค้นหา</button>
                </div>
                    </div>

            <table class="card-club" style="margin-bottom: 50px;">
                <thead>
                    <tr>
                        <th>รหัสนักเรียน</th>
                        <th>ชื่อ-สกุล</th>
                        <th>ระดับชั้น</th>
                        <th>ชุมนุม</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
    $stmt = $pdo->query("select * from student where student_id = '".$_POST['student_id']."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>

    <?php 
        if($row['club_id'] == 0){
    ?> 
   <tr>
        <td><?php echo $row['student_id'] ; ?></td>
        <td><?php echo $row['names'] ; ?></td>
        <td>ม.<?php echo $row['class'] ; ?>/<?php echo $row['room'] ; ?></td>
        <td class="color-success">รอเลือกชุมนุม</td>
     </tr>
    <?php 
        }
        else{
        $stmt = $pdo->query("select * from student where student_id = '".$_POST['student_id']."'");
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?> 
            <td><?php echo $row['student_id'] ; ?></td>
            <td><?php echo $row['names'] ; ?></td>
            <td>ม.<?php echo $row['class'] ; ?>/<?php echo $row['room'] ; ?></td>
            <?php
            $stmt2 = $pdo->query("select * from club where club_id = '".$row['club_id']."'");
            while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
            ?> 
            <td class="color-danger"><?php echo $row['names'] ; ?></td>
            <?php
            }
            ?> 
    <?php
            }
        }
    ?> 

<?php 
        }
    ?>   
                </tbody>
            </table>

            <h2>ข้อมูลชุมนุม</h2>
            <table class="card-club">
                <thead>
                    <tr>
                        <th>ชื่อชุมนุม</th>
                        <th>รายละเอียด</th>
                        <th>สถานะ</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
    $stmt = $pdo->query("select * from club ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
     <tr>
                        <td><?php echo $row['club_id'] ; ?>. <?php echo $row['names'] ; ?></td>
                        <td>ครู : <?php echo $row['teacher1'] ; ?> สถานที่เรียน : <?php echo $row['address'] ; ?> เกณฑ์ :  
                        <?php 
                        if($row['room']==0){
                            if($row['status'] == 0){
                                echo "ไม่จำกัดชั้นเรียน" ;
                            }
                            elseif($row['status'] == 11){
                                echo "จำกัดชั้นมัธยมศึกษาตอนต้น" ;
                            }
                            elseif($row['status'] == 12){
                                echo "จำกัดชั้นมัธยมศึกษาตอนปลาย" ;
                            }
                            else{
                                echo "จำกัดมัธยมศึกษาปีที่ ".$row['status'] ;
                            }
                        }
                        else{
                            echo "* บังคับ ม.".$row['class']."/".$row['room'] ;
                        }
                        ?>  
                        </td>
                        <?php 
                        if($row['size_in'] >= $row['size_get']){
                        ?>    
                        <td class="color-danger">เต็มแล้ว</td>
                        <?php 
                        }
                        else{
                            ?>    
                            <td class="color-success">เหลืออีก <?php echo $row['size_get'] - $row['size_in']  ; ?> คน</td>
                            <?php 
                        }
                        ?>
                    </tr>
<?php 
    }
    ?>
               
                  
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

