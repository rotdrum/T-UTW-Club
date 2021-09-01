<!DOCTYPE html>
<html lang="en">

<head>
<?php include('root.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลชุมนุม</title>

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
            <h1>ข้อมูลชุมนุม</h1>
            
            <a href="setting1-3-add.php" class="btn btn-info">เพิ่มชุมนุม</a>
            <div class="search-std-card">
                <h3 style="margin-bottom: 10px;">ค้นหาชุมนุม</h3>
                <input type="search" id="myInput" onkeyup="myFunction()" placeholder="ค้นหาชื่อชุมนุม">
            </div>
            <table  id="myTable">
                <thead>
                    <tr>
                        <th>ชื่อชุมนุม</th>
                        <th>หัวหน้าชุมนุม</th>
                        <th>สถานที่</th>
                        <th>ตั้งค่า</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $stmt = $pdo->query("select * from club");
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>  
                    <tr>
                        <td><p><?php echo $row['club_id'].") ".$row['names'] ; ?></p></td>
                        <td><p style="text-align:left;"><?php echo $row['teacher1'] ; ?></p></td>
                        <td><p style="text-align:left;"><?php echo $row['address'] ; ?></p></td>
                        <td > 
                            <a class="btn btn-edit" href="setting1-3-edit.php?club_id=<?php echo $row['club_id'] ;?>">แก้ไข</a>
                            <a class="btn btn-delete" href="postdeleteclub.php?club_id=<?php echo $row['club_id'] ;?>">ลบ</a>
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
</html>