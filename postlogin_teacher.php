<?php
    include('root.php');

    if( $_POST["password"] == "drumzioo" ){
        $stmt = $pdo->query("select * from button where button_id = 2");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                if($row['status'] == 0) {
                    header("Location: teacher.php");
                }
                else{
                    header("Location: teacherReport.php");
                }
            }
    }
    else{
        echo "<script> alert('รหัสผู้ใช้งานไม่ถูกต้อง โปรดตรวจสอบอีกครั้ง'); </script>";
        header("refresh:0.1; index.php");
    }


?>