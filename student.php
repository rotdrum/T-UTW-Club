<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาข้อมูลนักเรียน</title>
    
    <?php include('import.php'); ?>
    <?php include('root.php'); ?>

    
</head>
<body>

<?php 
    if (isset($_SESSION['stu'])){
?>
        <script>
        Swal.fire({
                 title: 'รหัสนักเรียนไม่ถูกต้อง!',
                 icon: 'error',
                 html:   'กรุณาทดลองอีกครั้ง หากไม่ได้กรุณาติดต่อผู้ดูแลระบบ',
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
    unset($_SESSION['stu']);
    }

?>

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
                <h2>ค้นหาข้อมูลนักเรียน
</h2>
            </div>
        </div>
        <form method="post" action="postlogin_student.php" class="card">

            <!-- card-control-1 -->
            <div class="card-control-1">
                <label class="lb-control">ค้นหาข้อมูลนักเรียน</label>
                <input type="text" name="password" maxlength="5" class="txt-data" placeholder="กรอกข้อมูลรหัสนักเรียน">
            </div>

            <div class="space"></div>

<h2 class="color-danger">** หมายเหตุ **</h2>
<p class="color-danger">- หากกรอกรหัสนักเรียนถูกต้อง แต่ค้นหาไม่พบ กรุณาติดต่อผู้ดูแลระบบ</p>


<div class="space"></div>

<?php 
    $stmt = $pdo->query("select * from admin where admin_id = 1");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <div class="telAdmin">
                <p>ผู้ดูแลระบบ</p>
                <p><?php echo $row['names'] ; ?></p>
                <p>สถานที่ติดต่อ : <?php echo $row['address'] ; ?></p>
                <p>เบอร์โทรศัพท์ : <?php echo $row['tel'] ; ?></p>
                <p>อีเมล : <?php echo $row['email'] ; ?></p>
            </div>
    <?php 
    } 
    ?>

            <!-- .btn-control-row 
            ใช้ tag a หรือ button ก็ได้ -->
            <div class="btn-control-row">
                <a class="btn btn-danger"  href="index.php">ยกเลิก</a>
                <button class="btn btn-success"  >ค้นหา</button>
            </div>


        </form>
    </div>

    <?php include('footer.php'); ?>

    
</body>
</html>