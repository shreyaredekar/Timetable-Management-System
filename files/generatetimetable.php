<?php
// Start the session
session_start();
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TimeTable Management System</title>
    <script type="text/javascript" src="assets/jsPDF/dist/jspdf.min.js"></script>
    <script type="text/javascript" src="assets/js/html2canvas.js"></script>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FLEXSLIDER CSS -->
    <link href="assets/css/flexslider.css" rel="stylesheet"/>
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet"/>
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="addteachers.php">ADD TEACHERS</a></li>
                <li><a href="addsubjects.php">ADD SUBJECTS</a></li>
                
                <li><a href="allotsubjects.php">THEORY COURSES</a></li>
                <li><a href="generatetimetable.php">VIEW TIME TABLE</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</div>
<!--NAVBAR SECTION END-->
<br>

<form action="facultypage.php" method="post">
    <div align="center" style="margin-top: 70px">
        <select name="select_semester" id="select_semester"  class="list-group-item">
            <option selected disabled>Select Semester</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="button" onclick="select_semester1()"  style="margin-top: 5px" class="btn btn-success btn-lg">VIEW TIMETABLE
        </button>
    </div>
</form>

<div>
    <br>
    <style>
        table {
            margin-top: 20px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 2px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
    <div id="TT" style="background-color: #FFFFFF">
        <table border="2" cellspacing="3" align="center" id="timetable" style="text-align: center;">
            
            <tr>
                <th style="text-align:center">WEEKDAYS</th>
                <th style="text-align:center">8:00-8:50</th>
                <th style="text-align:center">8:55-9:45</th>
                <th style="text-align:center">9:50-10:40</th>
                <th style="text-align:center">10:45-11:35<br>(Break)</th>
                <th style="text-align:center">11:40-12:30</th>
                <th style="text-align:center">12:30-1:30</th>
                <th style="text-align:center">1:30-2:30</th>
            </tr>
            <tbody id="table_body">
            
            </tbody>
            
                </table>
    </div>
</div>

<script type="text/javascript">

</script>


<!--HOME SECTION END-->

<!--<div id="footer">
    <!--  &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
-->
<!-- FOOTER SECTION END-->

<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>
<script>
function select_semester1() {
    var select_semester="select_semester";
    var semester=document.getElementById("select_semester").value;
    $.ajax({
        url: "generatetimetable_backend.php",
        type: "POST",
        data: {
            select_semester: select_semester,
            semester:semester,
        },
        success: function (data, status) {
          document.getElementById("table_body").innerHTML=data;
          //semester=document.getElementById("select_semester").value=semester;
        }
      });
}

//select_semester();
</script>

<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" style="margin-top: 70px; width:100%" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 70%; text-align: center;">
        <div class="modal-header" style="background-color: #101010;">
          <h5 class="modal-title" id="exampleModalLabel" >Add Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding:20px" id="display_button">
            
        </div>
        <!-- <div class="modal-footer">
          
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>
</body>
</html>
