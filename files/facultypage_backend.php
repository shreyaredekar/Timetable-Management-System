<?php
session_start();
include 'connection.php';
$teacher_id=$_SESSION['loggedin_id'];
if(isset($_POST['select_semester'])){
    $semester=$_POST['semester'];
    $semester1="'$semester'";
    $p1="'1'";
    $p2="'2'";
    $p3="'3'";
    $p4="'4'";
    $p5="'5'";
    $p6="'6'";
    $query="SELECT * FROM semester$semester";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $day=$row['day'];
            $day1="'$day'";
            $day=strtoupper($day);
            $period1=$row['period1'];
            $period2=$row['period2'];
            $period3=$row['period3'];
            $period4=$row['period4'];
            $period5=$row['period5'];
            $period6=$row['period6'];
            
            echo'<tr>
            <td>'.$day.'</td>';
            $subject_query="SELECT * FROM subjects WHERE subject_code='$period1'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period1=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p1.','.$day1.')" data-toggle="modal" data-target="#exampleModal">'.$period1.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period1.'<br>'.$teacher_name.'</td>';
            }

            $subject_query="SELECT * FROM subjects WHERE subject_code='$period2'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period2=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p2.','.$day1.')" data-toggle="modal" data-target="#exampleModal">'.$period2.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period2.'<br>'.$teacher_name.'</td>';
            }

            $subject_query="SELECT * FROM subjects WHERE subject_code='$period3'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period3=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p3.','.$day1.')" data-toggle="modal" data-target="#exampleModal">'.$period3.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period3.'<br>'.$teacher_name.'</td>';
            }

            echo '<td> -- </td>';


            $subject_query="SELECT * FROM subjects WHERE subject_code='$period4'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period4=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p4.','.$day1.')" data-toggle="modal" data-target="#exampleModal" >'.$period4.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period4.'<br>'.$teacher_name.'</td>';
            }

            $subject_query="SELECT * FROM subjects WHERE subject_code='$period5'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period5=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p5.','.$day1.')" data-toggle="modal" data-target="#exampleModal">'.$period5.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period5.'<br>'.$teacher_name.'</td>';
            }
            
            $subject_query="SELECT * FROM subjects WHERE subject_code='$period6'";
            $isAlloted="";
            $teacher_name="";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                while($subject_row = mysqli_fetch_assoc($subject_result)){
                    $isAlloted=$subject_row['allotedto'];
                    $teacher_query="SELECT * FROM `teachers` WHERE faculty_number='$isAlloted'";
                    $teacher_result=$GLOBALS['con']->query($teacher_query);
                    if($teacher_result->num_rows>0){
                    $teacher_row=$teacher_result->fetch_assoc();
                    $teacher_name=$teacher_row['name'];
                    }
                }
            }
            if($isAlloted==$teacher_id || $period6=='-' ){
                echo'<td onclick="add_period('.$semester1.','.$p6.','.$day1.')" data-toggle="modal" data-target="#exampleModal">'.$period6.'<br>'.$teacher_name.'</td>';
            }else{
                echo '<td style="cursor: text;">'.$period6.'<br>'.$teacher_name.'</td>';
            }
        }
    }
}
if(isset($_POST['add_subject'])){
    $period=$_POST['period'];
    $semester=$_POST['semester'];
    $day=$_POST['day'];
    $subject_query="SELECT * FROM subjects WHERE allotedto='$teacher_id'";
            $subject_result=mysqli_query($con,$subject_query);
            if(mysqli_num_rows($subject_result) > 0) {
                $subject_row = mysqli_fetch_assoc($subject_result);
                    $subject_code=$subject_row['subject_code'];
                    $query="UPDATE semester$semester SET period$period='$subject_code' WHERE day='$day'";
    mysqli_query($con,$query);
            }
}
if(isset($_POST['remove_subject'])){
    $period=$_POST['period'];
    $semester=$_POST['semester'];
    $day=$_POST['day'];
    $query="UPDATE semester$semester SET period$period='-' WHERE day='$day'";
    mysqli_query($con,$query);
}
?>