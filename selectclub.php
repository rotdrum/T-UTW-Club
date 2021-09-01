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
<?php 
    if (isset($_SESSION['al'])){
?>
        <script>
        Swal.fire({
                 title: 'ชุมนุมเต็ม!',
                 icon: 'error',
                 html:   'เสียใจด้วย กรุณาเลือกอีกครั้ง',
                 showCloseButton: true,
                 showCancelButton: false,
                 focusConfirm: false,
                 showConfirmButton: true,
                 //confirmButtonText: '<button>Login</button>',
                 //confirmButtonAriaLabel: 'Thumbs up, great!',
                 cancelButtonText: '<butt class="fa fa-thumbs-down"></button>',
                 cancelButtonAriaLabel: 'Thumbs down'
                 });
     </script>

<?php
    unset($_SESSION['al']);
    }

?>



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
                    $class = $row['class'];
                    $room = $row['room'];
                    if($row['class'] < 4){
                        $rank = 11 ;
                    }
                    else{
                        $rank = 12 ;
                    }
                    }
                ?>   
            </div>
        </div>
        <?php
                $check_club_id = "";
                $check_club_names = "";
        ?>
        <form class="card" method="post" action="postselectclub.php?student_id=<?php echo $_REQUEST['student_id']; ?>">
            
            <div class="timer-done" v-if="statusRegister">
                <h1 style="text-alin:center; margin-top: 50px;">เลือกชุมนุมที่ต้องการ</h1>
                <select class="sel-club" name="club_id" required>
                    <option value="">--- เลือก ---</option>
                <?php
                $stmt = $pdo->query("select * from club where class = ".$class." and room = ".$room." ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    $check_club_id = $row['club_id'];
                    $check_club_names = $row['names'];
                }
                if($check_club_id == ""){
                    $stmt2 = $pdo->query("select * from club where size_in < size_get and room = 0 and (status = 0 or status = ".$class." or status = ".$rank.") ");
                    while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $row2['club_id'] ; ?>"><?php echo $row2['names'] ; ?></option>
                        <?php  
                    }
                ?>
                <?php  
                }
                else {
                ?>
                    <option value="<?php echo $check_club_id ; ?>"><?php echo $check_club_names ; ?></option>
                <?php
                }
                ?>
                </select>

                <h3 class="color-danger">**หมายเหตุ : ชุมนุมที่ไม่ขึ้นให้เลือก เนื่องจากเป็นชุมนุมที่เต็มแล้ว หรือ ไม่เข้าเกณฑ์การเลือก หากขึ้นให้เลือกเพียง 1 ชุมนุม เพราะ เป็นชุมนุมรายห้องบังคับเลือก</h3>
                
                <div class="btn-control-row">
                    <a href="index.php" class="btn btn-danger"><i style="margin: 0 10px;" class="fas fa-chevron-left"></i> ยกเลิก</a>
                    <button href="statusPass.php" class="btn btn-success">ยืนยัน <i style="margin: 0 10px;" class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </form>

    </div>

    <?php include('footer.php'); ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    </script>


</body>
</html>

