<?php

require 'Config.php';

 if(session_status()==PHP_SESSION_NONE){
  session_start();
 }

 if(!empty($_SESSION["id"])){
    $id= $_SESSION['id'];
    $sql= "SELECT * FROM `users` WHERE `id`='$id'";
    $result= mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);

    if($result && $num>0){
      $row=mysqli_fetch_assoc($result);
    }else{
      $row=null;
      echo "<script>
      alert('please login again');
      window.location.href='index.php';
      </script>";
      exit;

    }

 }else{
  $row=null;
  echo "<script>
  alert('Server problem, please login again');
  window.location.href = 'index.php';
  </script>";
  exit;

 }

?>


<!DOCTYPE html>
<html>
<head>

  <title>Welcome</title>
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            width: 100%;
            max-width: 420px; /* Maximum width for larger screens */
            background: rgba(102, 102, 102, 0.516);
            border: 2px solid rgba(255, 255, 255, 0.37);
            color: rgb(255, 255, 255);
            border-radius: 15px;
            padding: 30px 40px;
            text-align: center; /* Center text */
        }

        .wrapper h1 {
            font-size: 40px;
            padding-bottom: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper .btn {
            width: 100%;
            height: 50px;
            border: none;
            outline: none;
            border-radius: 40px;
            font-size: 16px;
            color: black;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background-color: white; /* Set background color for button */
            cursor: pointer; /* Change cursor to pointer */
        }

        .btn:hover {
            color: rgb(255, 255, 255);
            background-color: black;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .wrapper {
                padding: 20px; /* Adjust padding for tablets */
            }

            .wrapper h1 {
                font-size: 30px; /* Adjust font size for smaller screens */
            }

            .wrapper .btn {
                font-size: 14px; /* Adjust button font size */
            }
        }

        @media (max-width: 480px) {
            .wrapper {
                padding: 200px; /* Further adjust padding for mobile devices */
            }

            .wrapper h1 {
                font-size: 24px; /* Further adjust font size */
            }

            .wrapper .btn {
                font-size: 12px; /* Further adjust button font size */
            }
        }
    </style>

</head>
<body>

<div class="wrapper">
  <h1>Welcome <?php echo $row["name"];?></h1>

  <button class="btn" onclick="window.location.href='Logout.php'">Logout</button>

</div>

</body>
</html>