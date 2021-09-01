<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTW club</title>

    <?php include('root.php'); ?>
    <?php include('import.php'); ?>
    
    
</head>
<body>

    <div class="index">
        <div class="index-home">
            <div class="index-home-logo">
                <img src="img/utw.gif">
            </div>
            <p class="index-title-main">ระบบกิจกรรมชุมนุม</p>
            <p class="index-title-sub">โรงเรียนอุทัยวิทยาคม</p>
            <div class="index-home-btn">
                <a onclick="student()" class="btn-student"><i class="fas fa-user-graduate"></i>นักเรียน</a>
                <a onclick="teacher()" class="btn-teacher"><i class="fas fa-chalkboard-teacher"></i>ครู/อาจารย์</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    
    <?php 
        $stmt = $pdo->query("select * from button where button_id = 1");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                if($row['status'] == 0) {
    ?>      
           <script>
      function student() {
            Swal.fire({
                title: 'ค้นหาข้อมูลนักเรียน',
                icon: 'info',
                html:   '<div  class="teacher-login">'+
                                '<a href="checkClub.php"  class="btn btn-danger">ตรวจสอบสิทธิ์หรือชุมนุม</a>'+
                        '</div>',
                
                // html:
                //     'You can use <b>bold text</b>, ' +
                //     '<a href="//sweetalert2.github.io">links</a> ' +
                //     'and other HTML tags',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton: false,
                //confirmButtonText: '<button>Login</button>',
                //confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<butt class="fa fa-thumbs-down"></button>',
                cancelButtonAriaLabel: 'Thumbs down'
                })
        }
        </script>
    <?php 
                }
                else{
    ?>      
            <script>
      function student() {
            Swal.fire({
                title: 'ค้นหาข้อมูลนักเรียน',
                icon: 'info',
                html:   '<div  class="teacher-login">'+
                                '<a href="student.php"  class="btn btn-info">ลงทะเบียนชุมนุม</a>'+
                                '<a href="checkClub.php"  class="btn btn-danger">ตรวจสอบสิทธิ์หรือชุมนุม</a>'+
                        '</div>',
                
                // html:
                //     'You can use <b>bold text</b>, ' +
                //     '<a href="//sweetalert2.github.io">links</a> ' +
                //     'and other HTML tags',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton: false,
                //confirmButtonText: '<button>Login</button>',
                //confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<butt class="fa fa-thumbs-down"></button>',
                cancelButtonAriaLabel: 'Thumbs down'
                })
        }
        </script>
    <?php 
                }
        }
    ?>


 

        <script>
        function teacher() {
            Swal.fire({
                title: 'ตรวจสอบสิทธิ์ของครู',
                icon: 'info',
                html:   '<form action="postlogin_teacher.php" method="post" class="teacher-login">'+
                            '<input type="password" name="password" class="passcode" placeholder="รหัสผ่านที่โรงเรียนกำหนด">'+
                            '<div class="btn-control-row">'+
                                '<button class="btn btn-info">เข้าสู่ระบบ</button>'+
                            '</div>'+
                        '</form>',
                
                // html:
                //     'You can use <b>bold text</b>, ' +
                //     '<a href="//sweetalert2.github.io">links</a> ' +
                //     'and other HTML tags',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                showConfirmButton: false,
                //confirmButtonText: '<button>Login</button>',
                //confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText: '<butt class="fa fa-thumbs-down"></button>',
                cancelButtonAriaLabel: 'Thumbs down'
                })
        }
    </script>
</body>
</html>