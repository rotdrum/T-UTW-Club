<!DOCTYPE html>
<html lang="en">

<head>
<?php include('root.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลผู้ตรวจเอกสาร</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

</head>

<body>
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>
        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>ข้อมูลผู้ตรวจเอกสาร</h1>

            <table>
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>ตำแหน่ง</th>
                        <th>ตั้งค่า</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                $stmt = $pdo->query("select * from manager");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                        <th><?php echo $row['manager_id'] ; ?></th>
                        <td><p style="text-align:left;"><?php echo $row['fname'] ; ?></p></td>
                        <td><p style="text-align:left;"><?php echo $row['position'] ; ?></p></td>
                        <td > 
                            <a class="btn btn-edit" href="setting1-6-edit.php?manager_id=<?php echo $row['manager_id'] ; ?>">แก้ไข</a>
                        </td>
                    </tr>
                <?php 
                    }
                ?>     
                </tbody>
            </table>
        </div>

        
    </section>
</body>

</html>