<?php
session_start();
include 'connection.php';
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
                echo '<td style="cursor: text;">'.$period1.'<br>'.$teacher_name.'</td>';
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
                echo '<td style="cursor: text;">'.$period2.'<br>'.$teacher_name.'</td>';
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
                echo '<td style="cursor: text;">'.$period3.'<br>'.$teacher_name.'</td>';
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
                echo '<td style="cursor: text;">'.$period4.'<br>'.$teacher_name.'</td>';

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
                echo '<td style="cursor: text;">'.$period5.'<br>'.$teacher_name.'</td>';
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
                echo '<td style="cursor: text;">'.$period6.'<br>'.$teacher_name.'</td>';
        }
    }
}
?>