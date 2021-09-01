<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('root.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

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
    <section id="admin-app" class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>
        </div>
        <div class="admin-dashboard">

            <h4>ตั้งค่าระบบ</h4>
            <h1>ข้อมูลระดับชั้นนักเรียน</h1>


            <form action="postAddStudentGroup.php" method="post" enctype="multipart/form-data">
                <div class="check-insert-student-2">
                    <h3 v-if="flagClass==0">นำเข้าข้อมูลด้วย Excel (.xlsx) </h3>
                    <h3 v-if="flagClass>=1">
                        นำเข้าข้อมูลนักเรียน ม.{{flagClass}} 
                        <a href="file/dd.xlsx">( คลิกดู ตัวอย่างไฟล์ )</a>
                    </h3>

                    <select class="sel-insert" name="class" required v-model="flagClass">
                        <option value="0">-- เลือกชั้นเรียน --</option>
                        <option value="1">ม.1</option>
                        <option value="2">ม.2</option>
                        <option value="3">ม.3</option>
                        <option value="4">ม.4</option>
                        <option value="5">ม.5</option>
                        <option value="6">ม.6</option>
                    </select>

                    <div class="cis-row" v-if="flagClass>=1">
                        <input type="file" name="excel" class="btn btn-warning" accept=".csv, .xls, .xlsx" />
                        <input type="submit" name="import" class="btn btn-success" value="เพิ่มข้อมูลรายชั้นเรียน" />
                        <div class="btn btn-danger" v-on:click="flagClass=0">ยกเลิก</div>
                    </div>
                </div>
            </form>
       


            <div class="check-insert-student-1">
                <h3>ระดับชั้นนักเรียนที่มีอยู่ในระบบ</h3>
                <div class="cis-row">
                    <?php 
                    $stmt = $pdo->query("select * from student where class = 1");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test1 = $row['class'];
                    }
                if(empty($test1)){ ?>
                    <h2 class="color-danger">ม.1</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.1</h2>
                    <?php } ?>



                    <?php 
                    $stmt = $pdo->query("select * from student where class = 2");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test2 = $row['class'];
                    }
                if(empty($test2)){ ?>
                    <h2 class="color-danger">ม.2</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.2</h2>
                    <?php } ?>



                    <?php 
                    $stmt = $pdo->query("select * from student where class = 3");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test3 = $row['class'];
                    }
                if(empty($test3)){ ?>
                    <h2 class="color-danger">ม.3</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.3</h2>
                    <?php } ?>



                    <?php 
                    $stmt = $pdo->query("select * from student where class = 4");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test4 = $row['class'];
                    }
                if(empty($test4)){ ?>
                    <h2 class="color-danger">ม.4</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.4</h2>
                    <?php } ?>



                    <?php 
                    $stmt = $pdo->query("select * from student where class = 5");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test5 = $row['class'];
                    }
                if(empty($test5)){ ?>
                    <h2 class="color-danger">ม.5</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.5</h2>
                    <?php } ?>



                    <?php 
                    $stmt = $pdo->query("select * from student where class = 6");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $test6 = $row['class'];
                    }
                if(empty($test6)){ ?>
                    <h2 class="color-danger">ม.6</h2>
                    <?php } else { ?>
                    <h2 class="color-success">ม.6</h2>
                    <?php } ?>

                </div>
            </div>

            <h4 style="margin-top: 20px;">ตั้งค่าระบบ</h4>
            <h1>ข้อมูลนักเรียน</h1>
            <a href="setting1-4-add.php" class="btn btn-info">เพิ่มนักเรียนรายบุคคล</a>

            <div class="search-std-card">
                <h3 style="margin-bottom: 10px;">ค้นหานักเรียน</h3>
                <input type="search" id="myInput" onkeyup="myFunction()" maxlength="5"  placeholder="ค้นหารหัสหรือชื่อนักเรียน">
          
            <form action="setting1-4-2.php" method="post">
                <div class="search-std-control">
                    <select class="sel-std-search" name="class" required>
                        <option value="">--- เลือกระดับชั้น ---</option>
                        <option value="1">ม.1</option>
                        <option value="2">ม.2</option>
                        <option value="3">ม.3</option>
                        <option value="4">ม.4</option>
                        <option value="5">ม.5</option>
                        <option value="6">ม.6</option>
                    </select>

                    <select class="sel-std-search" name="room"  required>
                        <option value="">--- เลือกห้อง ---</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>
                <button class="btn btn-success" style="width:920px;">ค้นหา</button>
</form>

            </div>

            <table  id="myTable">
                <thead>
                    <tr>
                        <th>รหัสนักเรียน</th>
                        <th>ชื่อ-สกุล</th>
                        <th>ระดับชั้น</th>
                        <th>ตั้งค่า</th>
                    </tr>
                </thead>
                <tbody>


                    <?php 
                $stmt = $pdo->query("select * from student order by class, room, ordinal");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr >
                        <td>
                            <p><?php echo $row['student_id'] ; ?></p>
                        </td>
                        <td>
                            <p style="text-align:left;"><?php echo $row['names'] ; ?></p>
                        </td>
                        <td>
                            <p style="text-align:left;">ม.<?php echo $row['class'] ; ?>/<?php echo $row['room'] ; ?></p>
                        </td>
                        <td>
                            <a class="btn btn-edit" href="setting1-4-edit.php?student_id=<?php echo $row['student_id'] ; ?>">แก้ไข</a>
                            <a class="btn btn-delete" href="postdeletestudent.php?student_id=<?php echo $row['student_id'] ; ?>">ลบ</a>
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

<script>
new Vue({
    el: '#admin-app',
    data: {
        flagClass: 0
    }
})
</script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


