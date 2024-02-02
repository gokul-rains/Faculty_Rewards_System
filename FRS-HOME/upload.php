<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard
</title>
   <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
   <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
 



<div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/BIT.png" class="img-fluid"/><span>FRS-BIT</span></h3>
            </div>
            <ul class="list-unstyled components">
<li  class="active">
                    <a href="1_findex.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="dropdown">
                    <a href="upload.php">
<i class="material-icons">upload</i><span>Upload Materials</span></a>
                </li>
               
                <li class="dropdown">
                    <a href="feedback.html">
<i class="material-icons">feedback</i><span>Feedback</span></a>

              <li class="dropdown">
                   <a href="profile.html">
                   <i class="material-icons">person</i><span>User Profile</span></a>    
        </nav>



        <!-- Page Content  -->
        <div id="content">

<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>

<a class="navbar-brand" href="#">Upload Materials</a>

                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">  
                            <li class="nav-item">
                                <a href="feedback.html" class="nav-link">
                                   <span class="material-icons">notifications</span>
                               </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">
<span class="material-icons">person</span>
</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
<span class="material-icons">logout</span>
</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
   </div>



       
<div class="row ">
                     
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Upload Materials</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                            <form method="POST" action="upload.php" enctype="multipart/form-data"  >
                                                <tr>
                                                    <td>
                                                        <lable for="sub"> Subject : <lable><br>
                                                        <input type= "text" id="sub" name="sub">
                                                 </td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label for="Lp">Lesson Plan : </label><br>
                                                    <input type="file" id="Lp" name="Lp">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Lm">Lecture Material : </label><br>
                                                    <input type="file" id="Lm" name="Lm">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Lv">Lecture Video : </label><br>
                                                    <input type="url" id="Lv" name="Lv" size="50"><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   
                                                    <label for="Dq">Discussion Question : </label><br>
                                                    <textarea type="text" id="Dq" name="Dq" rows="4" cols="50"></textarea><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Dl">Discourse Link : </label><br>
                                                    <input type="url" id="Dl" name="df" size="50"><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   
                                                    <p id="demo" style="margin-left: 800px;"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
   
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
   
  // Time calculations for days, hours, minutes and seconds
  var days = 6
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
   
  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<input  type="submit" name="submit">
                                                </td>
                                            </tr>
                                         </form>
                                         <?php
$host = 'localhost';
$user = "root";
$pass = "sql123";
$db = "pdf";

$conn = mysqli_connect($host , $user ,$pass , $db);
if(isset($_POST['submit']))
{
$lp = $_FILES['Lp']['name'];
$lp_type  = $_FILES['Lp']['type'];
$lp_size = $_FILES['Lp']['size'];
$lp_tem_loc  = $_FILES['Lp']['tmp_name'];
$lp_store  = "pdf/".$lp;

move_uploaded_file($lp_tem_loc , $lp_store);
$lm = $_FILES['Lm']['name'];
$lm_type  = $_FILES['Lm']['type'];
$lm_size = $_FILES['Lm']['size'];
$lm_tem_loc  = $_FILES['Lm']['tmp_name'];
$lm_store  = "pdf/".$lm;

move_uploaded_file($lm_tem_loc , $lm_store);
$sub  =  $_POST["sub"];
$lv = $_POST["Lv"];
$Dq = $_POST["Dq"];
$df = $_POST["Dl"];
;

$sql = "INSERT INTO pdf_file( sub , lp , lm , lv , dq , df ) values ('$sub' , '$lp' , '$lm' , '$lv' , '$Dq','$df' )";
 
$query = mysqli_query($conn , $sql);
}

?>
                                        </tbody>
                                    </table>
                                </div>
                           
                        </div>

</div>



        </div>
    </div>







 
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
 
 
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
$('#content').toggleClass('active');
            });

$('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });


     
           
       
</script>
 
 



  </body>
 
  </html>