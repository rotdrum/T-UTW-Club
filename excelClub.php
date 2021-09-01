<!DOCTYPE html>
<html lang="en">

<head>
<?php include('root.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สำรองไฟล์ Excel</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- logo browser -->
    <link rel="icon" href="img/logo-browser.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <!-- Sweet alert 2 -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <section class="admin-container">
        <div class="admin-nav">
            <?php include('admin-navbar.php'); ?>

        </div>
        <div class="admin-dashboard">
            <h4>ตั้งค่าระบบ</h4>
            <h1>สำรองไฟล์ Excel</h1>


            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <h3>สำรองข้อมูลชุมนุม</h3>
        <button class="btn btn-success" onclick="exportTableToExcel('tblData')">ดาวน์โหลดไฟล์ Excel</button>
                   
        <table id="tblData">

<tr>

    <th>club_id</th>
    <th>names</th>
    <th>address</th>
    <th>groups</th>
    <th>size_get</th>
    <th>size_in</th>
    <th>teacher1</th>
    <th>teacher2</th>
    <th>teacher3</th>
</tr>
<?php 
                $stmt = $pdo->query("select * from club");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                    <td><?php echo $row['club_id'] ; ?></td>
                    <td><?php echo $row['names'] ; ?></td>
                    <td><?php echo $row['address'] ; ?></td>
                    <td><?php echo $row['groups'] ; ?></td>
                    <td><?php echo $row['size_get'] ; ?></td>
                    <td><?php echo $row['size_in'] ; ?></td>
                    <td><?php echo $row['teacher1'] ; ?></td>
                    <td><?php echo $row['teacher2'] ; ?></td>
                    <td><?php echo $row['teacher3'] ; ?></td>
                    </tr>
                <?php 
                    }
                ?>

</table>
                </div>


<!--
                <div class="form-control">
                    <h3>ล้างข้อมูลทั้งหมด</h3>
                    <div class="form-control-col">
                        <div class="form-control-row">
                            <p>กรุณาสำรองไฟล์ก่อน</p>
                            <a class="btn btn-danger" onclick="delete_sureAll()">ลบทั้งหมด</a>
                        </div>
                    </div>
                </div>
-->    
                

                
                <!-- <div class="btn-manage">
                    <button class="btn btn-delete" name="btn_newpatch">New patch</button>
                    <button class="btn btn-upload" name="btn_uppatch">Update patch</button>
                </div> -->

            </form>
        </div>

        <script>

function exportTableToExcel(tableID, filename = ''){

var downloadLink;

var dataType = 'application/vnd.ms-excel';

var tableSelect = document.getElementById(tableID);

var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');



// Specify file name

filename = filename?filename+'.xls':'excel_dataClub.xls';



// Create download link element

downloadLink = document.createElement("a");



document.body.appendChild(downloadLink);



if(navigator.msSaveOrOpenBlob){

var blob = new Blob(['\ufeff', tableHTML], {

    type: dataType

});

navigator.msSaveOrOpenBlob( blob, filename);

}else{

// Create a link to the file

downloadLink.href = 'data:' + dataType + ', ' + tableHTML;



// Setting the file name

downloadLink.download = filename;



//triggering the function

downloadLink.click();

}

}

</script>

        
        <script>
         function delete_sureSC() { 
                Swal.fire({
                title: 'คุณแน่ใจว่าต้องการลบข้อมูล?',
                icon: 'info',
                html:   '',
                showCloseButton: true,
                showDenyButton: true,
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton: false,
                denyButtonText: '<a style="text-decoration:none; color: #fff;" href="postdeleteall.php">ลบข้อมูล</a>',
                cancelButtonText: 'ยกเลิก',
                cancelButtonAriaLabel: 'Thumbs down'
                })
            }
            function delete_sureAll() { 
                Swal.fire({
                title: 'คุณแน่ใจว่าต้องการลบทั้งหมด?',
                icon: 'info',
                html:   '',
                showCloseButton: true,
                showDenyButton: true,
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton: false,
                denyButtonText: '<a style="text-decoration:none; color: #fff;" href="setting1-5.php?id=">ลบทั้งหมด</a>',
                cancelButtonText: 'ยกเลิก',
                cancelButtonAriaLabel: 'Thumbs down'
                })
            }
        </script>
    </section>
</body>


</html>