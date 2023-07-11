<?php

session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location : index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>home</title>
   <style>
    #course{
    padding: 8vw 8vw 8vw 8vw;
    text-align: center;
}
#course .course-box{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 1rem; 
    margin-top: 40px; 
}

#course .courses{
    text-align: start;
    background-color: #F9F9FF;
    height: 100%;
    position: relative;
}
#course .courses img{
    width: 100%;
    height: 60%;
    background-size: cover;
    background-position: center;
}
#course .courses .details{
    padding: 15px 15px 0 15px;
}
#course .courses .details h1{
  text-align:center;
}
#course .courses .details i{
    color: #FDC93B;
    font-size: .9rem;

}

#course .courses .cost{
    background-color:rgb(245, 15, 15);
    color: #fff;
    line-height: 50px;
    width: 100px;
    height: 50px;
    text-align: center;
    border-radius:50%;
    position: absolute;
    right: 15px;
    bottom: 100px;
}






#cours{
    padding: 8vw 8vw 8vw 8vw;
    text-align: center;
}
#cours .course-box{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    grid-gap: 1rem; 
    margin-top: 40px; 
}

#cours .courses{
    text-align: start;
    background-color: #F9F9FF;
    border:1px solid blue;
    border-radius:10px;
    height: 100%;
    position: relative;
}
#cours .courses img{
    width: 100%;
    height: 60%;
    background-size: cover;
    background-position: center;
}
#cours .courses .details{
    padding: 15px 15px 0 15px;
}
#cours .courses .details h1{
  text-align:center;
  
}
#cours .courses .details i{
    color: #FDC93B;
    font-size: .9rem;

}

#cours .courses .cost{
    background-color:rgb(245, 15, 15);
    color: #fff;
    line-height: 50px;
    width: 100px;
    height: 50px;
    text-align: center;
    border-radius:50%;
    position: absolute;
    right: 15px;
    bottom: 100px;
}

/*registration*/

h3{
    text-align:center;
    margin-top:20px;
}
h3 a{
    text-decoration:none;
    font-family:arial;
    color:red;
    border:1px solid gray;
    border-radius:10px;
    padding:10px;
    
}
h3 a:hover{
    background:#50a832;
    color:#fafafa;
}


   </style>
    

</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"><img src="jupi.png" alt="Logo" height="70px"></a></p>
        </div>
        <div class="right-links">


        <?php
        
        $id = $_SESSION['id'];
        $query = mysqli_query($con,"SELECT*FROM users  WHERE Id=$id");

        while($result = mysqli_fetch_assoc($query)){
            $res_Uname = $result['Username'];
            $res_Email = $result['Email'];
            $res_Age = $result['Age'];
            $res_id = $result['Id'];
        }
        
        echo "<a href='edit.php?Id=$id'>Change Profile</a>"

        ?>


            
            <a href="index.php"><button class='btn'>Log out</button></a> 
        </div>
    </div>
    
        <h1>MOST WELCOME</h1>
   
    <main>

    <div class="main-box top">
        <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?> </b>, Welcom</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b></p>
            </div>
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b></p>
            </div>
        </div>
    </div>

    </main>


   <h3> <a href="test.php">Today's Free Tips</a></h3>
    
    <section id="course">
        <h1>JOIN US ON</h1>
       
        <div  class="course-box">
            <div onclick="window.location.href='course-inner.html';" class="courses">
               <a href="https://t.me/+MM8jPsjEYsZlNjk0"> <img src="tel.png" alt="pic"></a>
                <div class="details">
                 
                  <h1>Telegram</h1> 
                
                   
                   
                  
                </div>
               
            </div>
            <div class="courses">
           <a href="https://www.facebook.com/jupiter.marz.90"> <img src="face.png" alt="pic"></a>
                <div class="details">
                 
                  <h1>Facebook</h1> 
                  
                </div>
              
            </div>


            <div class="courses">
            <a href="https://twitter.com/JupiterMil32289?t=QEfIi546wpkgJiw-KBbF4A&s=09"><img src="twi.png" alt="pic"></a>
                <div class="details">
                 
                  <h1>Twitter</h1> 
                  
                </div>
              
            </div>




            <div class="courses">
            <a href=" https://wa.me/256755821126"><img src="wat.png" alt="pic"></a>
                <div class="details">
                 
                  <h1>WhatsApp </h1> 
               
                    
                  </div>
                </div>
               
            </div>
           
            
           
          
           
        </div>
    </section>
   


    <section id="cours">
        <h1>CATEGORIES</h1>
       
        <div  class="course-box">
            <div class="courses">
                <img src="netw.jpeg" alt="pic">
                    <div class="details">
                     
                      <h1>FREE INTERNET</h1> 
                      
                    </div>
                  
                </div>
            <div class="courses">
            <img src="vpn.jpg" alt="pic">
                <div class="details">
                 
                  <h1>NEW INTERNET VPNS</h1> 
                  
                </div>
              
            </div>


            <div class="courses">
            <img src="foot.jpg" alt="pic">
                <div class="details">
                 
                  <h1>FOOTBALL TIPS</h1> 
                  
                </div>
              
            </div>




            <div class="courses">
            <img src="software.jpg" alt="pic">
                <div class="details">
                 
                  <h1>TECH EXPERTS </h1> 
               
                    
                  </div>
                </div>
               

                <div class="courses">
                    <img src="design.jpg" alt="pic">
                        <div class="details">
                         
                          <h1>GRAPHICS DESIGN</h1> 
                          
                        </div>
                      
                    </div>

                    <div class="courses">
            <img src="money.jpg" alt="pic">
                <div class="details">
                 
                  <h1>MAKING MONEY ONLINE</h1> 
                  
                </div>
              
            </div>
            </div>
           
            
           
          
           
        </div>
    </section>
   
</body>
</html>