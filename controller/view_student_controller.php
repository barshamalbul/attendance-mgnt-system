<?php
                     include '../../common/connect.php';
                     $sql ="SELECT * FROM tbl_students INNER JOIN 
                     tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid ORDER by tbl_students.Sid DESC";
                    if(isset($_POST['class']))
                    { 
                        ?>
                        <script type="text/javascript">
                        $("#loader").load("loader.php");
                        </script>
<?php
                        $grade=$_POST['class'];
                        switch($grade)
                        {
case 'all':
$sql ="SELECT * from tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
 ORDER by tbl_students.Sid DESC";
break;

case '1':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class ='1' ORDER by tbl_students.Sid DESC";
                            break;
                            
case '2':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='2' ORDER by tbl_students.Sid DESC";
break;

case '3':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='3' ORDER by tbl_students.Sid DESC";
break;

case '4':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='4' ORDER by tbl_students.Sid DESC";
break;
case '5':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='5' ORDER by tbl_students.Sid DESC";
break;
case '6':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='6' ORDER by tbl_students.Sid DESC";
break;
case '7':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='7' ORDER by tbl_students.Sid DESC";
break;
case '8':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='8' ORDER by tbl_students.Sid DESC";
break;
case '9':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='9' ORDER by tbl_students.Sid DESC";
break;
case '10':
$sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid 
where class='10' ORDER by tbl_students.Sid DESC";
break;
default :
$sql ="SELECT * from tbl_students";
break;
   }
      }?>