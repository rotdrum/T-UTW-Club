<?php

    include('rootSQL.php');

   if(isset($_POST["import"])){
    $tmp = explode(".", $_FILES["excel"]["name"]);
    $extension = end($tmp);

    $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
    if(in_array($extension, $allowed_extension)){
        $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
        include("PHPExcel/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
        $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file
      
        // $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
          $highestRow = $worksheet->getHighestRow();
          for($row=2; $row<=$highestRow; $row++)
          {
          //$output .= "<tr>";
          $student_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
          $names = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
          $room = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
          $ordinal = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
          $club_id = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
          // $check_key = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
          $class = $_POST['class'];
          $check_id = "CE".$student_id ;

          $query = "INSERT INTO checkstudent(check_id, time1, time2, time3, time4, time5, time6, time7, time8, time9, time10, time11, time12, time13, time14, time15, time16, time17, time18, time19, time20) VALUES ('".$check_id."', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9)";
          mysqli_query($connect, $query);

          $query = "INSERT INTO student(student_id, names, class, room, ordinal, club_id, check_id) VALUES ('".$student_id."', '".$names."', '".$class."', '".$room."', '".$ordinal."', '".$club_id."', '".$check_id."')";
          mysqli_query($connect, $query);


          /*
          $output .= '<td>'.$student_id.'</td>';
          $output .= '<td>'.$names.'</td>';
          $output .= '<td>'.$class.'</td>';
          $output .= '<td>'.$room.'</td>';
          $output .= '<td>'.$ordinal.'</td>';
          $output .= '<td>'.$club_id.'</td>';
          $output .= '<td>'.$check_id.'</td>';
          $output .= '</tr>';
          */
          }
        } 
        //$output .= '</table>';
      } 

  }
                
header("Location: setting1-4.php");
  

?>