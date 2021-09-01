<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรดรอสักครู่</title>
    
    <?php include('import.php'); ?>
    <?php include('root.php'); ?>
    
    
</head>
<body>
    
    <div class="register" id="wait">
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
                <h2>ขั้นตอนที่ 2/3 : เตรียมเลือกชุมนุม</h2>
                <?php
                $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <h4><?php echo $row['student_id']." ".$row['names'] ; ?></h4>
                <?php 
                    }
                ?>   
            </div>
        </div>
        <form class="card">
            <div class="timer-wait" v-if="!statusRegister">
                <h1>กรุณารอสักครู่</h1>

                <div class="loadingio-spinner-ripple-cs0r6su1glk">
                    <div class="ldio-abebizowwe5">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <h3>เหลือเวลาอีก</h3>
                <h1>{{ displayMinutes }} : {{ displaySeconds }} </h1>

                <div class="progress-bar">
                    <progress class="sb-progress sb-progress--red" v-bind:value="displayProgress" max="100"></progress>
                </div>
                    
                <h3>** เพื่อป้องกันปัญหาด้านการทับซ้อนกันของข้อมูล กรุณารอจนหมดเวลาเพื่อทำการเลือกชุมนุมอีกครั้ง</h3>
          
                <a class="a-check-club" href="checkClub.php" target="_blank">ตรวจสอบสถานะชุมนุม (กดลิงค์นี้เปิดแท็ปใหม่)</a>
            </div>
            
            
            <div class="timer-done" v-if="statusRegister">
                <h1 style="text-alin:center; margin-top: 50px;">นับถอยหลังเสร็จสิ้น</h1>
                <?php
                $stmt = $pdo->query("select * from student where student_id = '".$_REQUEST['student_id']."'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                <br/>
                <br/>
                <h2>สามารถดำเนินการเลือกชุมนุมได้แล้ว</h2>
                <br/>
                <br/>
                <?php 
                    }
                ?>  

                <div class="btn-control-row">
                    <a href="index.php" class="btn btn-danger"><i style="margin: 0 10px;" class="fas fa-chevron-left"></i> ยกเลิก</a>
                    <a href="selectclub.php?student_id=<?php echo $_REQUEST['student_id']; ?>" class="btn btn-success">ต่อไป <i style="margin: 0 10px;" class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </form>

        
    </div>

    <?php include('footer.php'); ?>


    <script src="js/vue-main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    </script>


</body>
</html>

