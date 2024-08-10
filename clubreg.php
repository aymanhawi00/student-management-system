<?php
include("database.php");
ob_start();
session_start();
if (!isset($_SESSION["superid"]) && !isset($_SESSION['admin'])) {
   echo "<script>window.top.location='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin - Register Club</title>
   <link rel="icon" type="images/x-icon" href="images/maarifs-logo.png">
   <script src="https://kit.fontawesome.com/450cf52145.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

         * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: "Poppins", sans-serif;
         }

         body{
            transition: 300ms all 0s ease-in-out;
         }

         #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,.8) url(images/Coffee@1x-1.0s-200px-200px\ \(4\).gif) no-repeat center center;
            background-size: 7%;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
         }

         .remcon a {
            text-decoration: none;
            color: #fff;
         }

         #set {
            position: inherit;
            left: -2rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: #5ab5c7;
            cursor: pointer;
            transition: 300ms color 0s;
         }

         i:hover {
            color: #A9A9A9;
         }

         nav {
         position: fixed !important;
         top: 0 !important;
         width: 100% !important;
         z-index: 2;
         }

         .dropdown-item:hover {
            background-color: #adb5bd;
         }

         .form-container {
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         background: url('images/bridge3.jpg') no-repeat;
         background-size: cover;
         background-position: center;
         }

         .wrapper {
         width: 500px;
         background: rgba(255, 255, 255, .1);
         border: 2px solid rgba(255, 255, 255, .2);
         box-shadow: 0 0 10px rgba(0, 0, 0, .2);
         backdrop-filter: blur(50px);
         border-radius: 0 0 10px 10px;
         color: #fff;
         padding: 30px 35px;
         margin: 0 10px;
         position: relative;
         }

         .wrapper h1 {
         font-size: 37px;
         text-align: center;
         margin-bottom: 20px;
         }

         .wrapper .input-box {
         display: flex;
         justify-content: center;
         flex-wrap: wrap;
         }

         .input-box .input-field {
         position: relative;
         width: 90%;
         height: 50px;
         margin: 17px 0;
         }

         .input-box .input-field input {
         width: 100%;
         height: 100%;
         background: transparent;
         border: 2px solid rgba(255, 255, 255, .2);
         outline: none;
         font-size: 17px;
         color: #fff;
         border-radius: 35px;
         padding: 0 25px;
         }

         .input-box .input-field input::placeholder {
         color: #fff;
         }

         .wrapper .btn {
         width: 75%;
         height: 50px;
         border: none;
         outline: none;
         border-radius: 21px;
         box-shadow: 0 0 10px rgba(0, 0, 0, .1);
         cursor: pointer;
         font-size: 17px;
         color: #fff;
         font-weight: 550;
         margin-top: 15px;
         background-color: #fff;
         color: black;
         }

         .wrapper .btn:hover {
            background-color: #adb5bd;
         }

         #home-nav {
            position: relative;
         }

         #logout {
            position: absolute !important;
            right: 50px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
         }

         .regcontain {
            display: flex;
            justify-content: center;
         }

         .regcon {
            position: absolute;
            top: -3rem;
            left: -0.5%;
            height: 3rem;
            width: 15rem;
            cursor: default;
            backdrop-filter: blur(50px);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            transition: 300ms background 0s;
            font-weight: 400;
            background-color: #adb5bd;
            border-top: 2px solid rgba(255, 255, 255, .2);
            border-right: 2px solid rgba(255, 255, 255, .2);
            border-left: 2px solid rgba(255, 255, 255, .2);
            outline: none;
            border-radius: 10px 10px 0 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
         }

         ::selection{
            background-color: #adb5bd;
         }

         .remcon {
            position: absolute;
            top: -3rem;
            height: 3rem;
            right: -0.5%;
            width: 15rem;
            backdrop-filter: blur(50px);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            cursor: pointer;
            font-weight: 400;
            border-top: 2px solid rgba(255, 255, 255, .2);
            border-right: 2px solid rgba(255, 255, 255, .2);
            border-left: 2px solid rgba(255, 255, 255, .2);
            outline: none;
            border-radius: 10px 10px 0 0;
            background-color: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
         }

         .wrapper .input-box .input-field select {
            width: 100%;
            height: 100%;
            position: relative;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            outline: none;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            color: #fff;
            border-radius: 7px;
            padding: 0 15px;
         }

         .wrapper .input-box .input-field select option {
            color: black;
            background: transparent;
         }

         .remcon:hover {
            background-color: #0d6efd;
         }

         #remcon {
            background-color: #adb5bd !important;
            cursor: default !important;
         }

         #register2 {
            background-color: transparent !important;
            cursor: pointer;
         }

         #register2:hover {
            background-color: #0d6efd !important;
         }
         
         .btn {
            transition: 300ms background 0s ease-in-out;
         }

         @media (max-width: 576px) {
         .input-box .input-field {
            width: 100%;
            margin: 10px 0;
         }
         }
   </style>
</head>

<body>
<div id="preloader"></div>
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="home-nav">
       <div class="container-fluid">
         <a class="navbar-brand" href="admin-home.php"><img src="images/navlogo.png" width="250px"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

            <li class="nav-item">
               <a class="nav-link" href="dash.php">Dashboard</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Activities
              </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="activity.php">Club Activity</a></li>
                 <li><a class="dropdown-item" href="trackattendance.php">Track Attendance</a></li>
              </ul>
           </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               School Registration
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item active" href="clubreg.php">Club Registration</a></li>
                  <li><a class="dropdown-item" href="sectionreg.php">Section Registration</a></li>
               </ul>
            </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Student Registration
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="admin-home.php">Add Student</a></li>
               </ul>
            </li>
            
            <li class="nav-item" id="logout">
            <a href="settings.php" target="_blank" id="set"><i class="fa-solid fa-gear"></i></a>
               <a class="link" onclick="con()" href="logout-admin.php">Logout</a>
            </li>
            </ul>
         </div>
          </div>
      </nav>

   <div class="form-container">

      <div class="wrapper">

      <div class="regcon">Register</div>

      <a href="clubrem.php"><div id="remove" class="remcon">Remove</div></a>

         <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">

               <h1>Register Club</h1>

               <div class="input-box">
                  <div class="input-field">
                     <input type="text" name="clubregister" placeholder="Club Name" required>
                  </div>
               </div>

               <div class="regcontain">
               <button type="submit" name="clubreg" class="btn">Register</button>
               </div>

               <?php
               if (isset($_GET['success'])) 
                     {
                     echo "<div class='alert alert-success text-center mt-3 mb-0'>Club successfully registered!</div>";
                     }
               ?>

         </form>
      </div>

   </div>
   <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){
         loader.style.display = "none";
      });
   </script>
</body>
</html>
<?php
   if(isset($_POST['clubreg'])) {
      $newclub = $_POST['clubregister'];

      $query = "INSERT INTO club (clubs) VALUES ('$newclub');";

      mysqli_query($conn, $query);
      if (mysqli_query($conn, $query)){
      echo "<script>window.top.location='clubreg.php?success'</script>";
      }
   }
?>