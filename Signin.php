<?php


 
 require 'Config.php';

 if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $sql= "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
  $result= mysqli_query($conn, $sql);

  if($result){
    header("Location: index.php");
    exit;
  }
 }
?>



<!DOCTYPE html>
<html>

<head>
  <title>Signin</title>

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
            transition: width 0.3s ease;
        }

        .wrapper h1 {
            font-size: 40px;
            text-align: center;
        }

        .wrapper .input-box {
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, 0.381);
            border-radius: 40px;
            font-size: 16px;
            color: rgb(255, 255, 255);
            padding: 20px 45px 20px 20px;
        }

        .input-box input:hover {
            background: rgba(255, 255, 255, 0.571);
        }

        .input-box input::placeholder {
            color: rgb(255, 255, 255);
            font-weight: 300;
        }

        .input-box:hover input::placeholder {
            color: rgb(0, 0, 0);
            font-weight: 300;
        }

        .wrapper .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            gap: 10px;
            border: none;
            outline: none;
            border-radius: 40px;
            font-size: 16px;
            color: black;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background-color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .btn:hover {
            color: rgb(255, 255, 255);
            background-color: black;
        }

        .btn img {
            width: 20px;
            height: 20px;
        }

        .wrapper .register-link {
            font-size: 14px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register-link p a {
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p {
            margin-bottom: 5px;
        }

        .register-link p a:hover {
            text-decoration: underline;
            color: rgb(0, 0, 0);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .wrapper {
                padding: 20px; /* Adjust padding for tablets */
            }

            .wrapper h1 {
                font-size: 30px; /* Adjust font size for smaller screens */
            }

            .input-box input {
                font-size: 14px; /* Adjust input font size */
            }

            .btn {
                font-size: 14px; /* Adjust button font size */
            }
        }

        @media (max-width: 480px) {
            .wrapper {
                padding: 15px; /* Further adjust padding for mobile devices */
            }

            .wrapper h1 {
                font-size: 24px; /* Further adjust font size */
            }

            .input-box input {
                font-size: 12px; /* Further adjust input font size */
            }

            .btn {
                font-size: 12px; /* Further adjust button font size */
            }
        }
    </style>
</head>

<body>

  <div class="wrapper">
    <form action="" method="POST">
      <h1>Signin Page</h1>

      <div class="input-box">
        <input type="text" name="name" placeholder="Name" required>
      </div>


      <div class="input-box">
        <input type="email" name="email" placeholder="Email" required>
      </div>

      <div class="input-box">
        <input type="password" name="pass" placeholder="Password" required>
      </div>

      <button class="btn" type="submit">Signup</button>


      <div class="register-link">
        <p>alrady Register? <a href="index.php">Login here</a></p>
        <p>OR</p>
      </div>
      <a href="<?= $url ?>" class="btn">
        <img src="google.png" alt="Google Logo"> Signup with Google
    </a>
    </form>
  </div>


</body>

</html>