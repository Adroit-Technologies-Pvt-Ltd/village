<?php
$servername = "localhost";
$username = "root";
$password = "";
$fname = $_POST['childfirstname'];
$lname = $_POST['childlastname'];
$dob = $_POST['dob'];
$bloodgroup = $_POST['bloodgroup'];
$gender = $_POST['gender'];
$adharnumber = $_POST['adharnumber'];
$qualification = $_POST['qualification'];
$nameoforg = $_POST['nameoforg'];
$fadharnumber = $_POST['fadharnumber'];
$option = $_POST['option'];
$IFSCcode = $_POST['IFSCcode'];
$accnumber = $_POST['accnumber'];
$Bankname = $_POST['Bankname'];
$Insurancename = $_POST['insurance'];

$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE mydb";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "";
}

mysqli_select_db($conn, 'mydb');
$sql = "CREATE TABLE child (
firstname VARCHAR(15) NOT NULL,
lastname VARCHAR(15) NOT NULL,
dob DATE,
bloodgroup VARCHAR(3) NOT NULL,
gender VARCHAR(15) NOT NULL,
adharnumber VARCHAR(15) NOT NULL,
qualification VARCHAR(15) NOT NULL,
nameoforg VARCHAR(15) NOT NULL,
fadharnumber VARCHAR(15) NOT NULL,
options VARCHAR(3) NOT NULL,
IFSCcode VARCHAR(15)  ,
accnumber VARCHAR(15) ,
Bankname VARCHAR(15) ,
Insurancename VARCHAR(15)
)";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" ;
}

$sql = "INSERT INTO child (firstname,lastname,dob,bloodgroup,gender,adharnumber,qualification,nameoforg,fadharnumber,options,IFSCcode,accnumber,Bankname,Insurancename)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn,$sql);

mysqli_stmt_bind_param($stmt,'ssssssssssssss',$fname,$lname,$dob,$bloodgroup,$gender,$adharnumber,$qualification,$nameoforg,$fadharnumber,$option,$IFSCcode,$accnumber,$Bankname,$Insurancename);

mysqli_stmt_execute($stmt);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resgistation Successful-Do u Have Child</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.gif" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body bgcolor="white">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>7 VILLAGES CHARITABLE TRUST</span></a></h1>
        </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
  <li><a class="nav-link scrollto active" href="childrenform.html">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1> <span>Registered Successfully</span></h1>

          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->




<br>
<br>
 <div class="form-footer" align="left">
<a href="childrenform.html"><button class="btnchild">CLICK HERE IF YOU HAVE ANOTHER CHILD</button></a>
</div>
<br>
<div class="form-footer" align="right">
<a href="index.html" ><button class="btnchild">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEXIT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button></a>

</div>





  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
