<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
   <div class="container">
    <div class="box form-box">

    <?php
    
    include("php/config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];
 
    
        //verifying unique email

        $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

        if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                        <p>This email is used, Try another one please!</p>
                        </div> <br>";

            echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button>";
   
        }
        else{

            mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occurred");

                echo "<div class='message'>
                <p>Registration Successful</p>
                </div> <br>";

                echo "<a href='index.php'><button class='btn'>Login Now</button>";
        }   

    }else{

    







      
    ?>  





       <header>Register</header> 
       <form action="" method="POST">

        <div class="fields input">
            <lable for="username">Username</lable>
            <input type="text" name="username" id="username" autocomplete="off" required/>
        </div>
        <div class="fields input">
            <lable for="email">Email</lable>
            <input type="email" name="email" id="email" autocomplete="off" required/>
        </div>
        <div class="fields input">
            <lable for="email">Age</lable>
            <input type="age" name="age" id="age" autocomplete="off" required/>
        </div>
        <div class="fields input">
            <lable for="username">Password</lable>
            <input type="password" name="password" id="password" required/>
        </div>
        <div class="field">
            
            <input type="submit" class="btn" name="submit" value="Register" required/>
        </div>
        <div class="links">
            Already a member  <a href="index.php">Sign In</a>
        </div>
       </form>
    </div>

    <?php } ?>

   </div>
</body>
</html>