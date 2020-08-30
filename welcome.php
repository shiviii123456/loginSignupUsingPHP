<?php
session_start();
    if(!isset($_SESSION['email']))
    {
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="css/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <style>
    star{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    border-top:0;
    box-sizing:  border-box;


}

body{
    background-color: white;
    font-family: 'Monteserrat',sans-serif;
    color: black;
}

.top{
    
    font-size: 20px;
    height: 600px;
    font-family: 'Montserrat', sans-serif;
    width: 100%;
    background-image: linear-gradient(white,grey);

}
span{
    color: teal;
}
.middle{
    font-family: 'Luckiest Guy', cursive;
    font-size: 25px;
    margin: 10px 20px 10px 20px;
    padding: 10px 20px 10px 20px;
    background-image: linear-gradient(white,black);


}
nav{
    
    background: #0082e6;
    height: 80px;
    width: 100%;
    padding: 0px;
    position:fixed;
}
label.logo{
    color: white;
    font-size: 30px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;

}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
nav ul li a{
    color: thistle;
    text-transform: uppercase;
}
.bottom{
    
    height: 30rem;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 15vh;
    background-color:teal;
    color: white;
    text-align: center;
    margin-bottom: 0px;
    padding: 5px;
}
.bottom a{
    height: 100px;
    width: 100px;
    background-color: rgb(194, 223, 235);
    border-radius: 20px;
    text-align: center;
    margin: 20px;
    line-height: 110px;
    box-shadow: 1px 4px 2px 2px rgb(134, 125, 125);
    transition: all 0.2s linear;
}


a i{
    transition: all 0.2s linear;
}
a:hover i{
 transform: scale(1.4);
}
.fa-instagram{
    color: #0097e6;
}
.fa-facebook{
    color: #0097e6;
}
.fa-linkedin{
    color:  #0097e6;
}
.fa-twitter{
    color:  #0097e6;
}
.qual{
    background-color: teal;
    width: 220px;
    height: 50px;
    padding: 5px;
    border: solid white;
    box-shadow: 1px 4px 2px 2px rgb(134, 125, 125); 
}
.topp{
    font-family: 'Sacramento', cursive;
    color: teal;    
}
</style>

</head>
<body style="margin: 0px 0px 0px 0px">
    <div class="star">
        <nav>
            <label class="logo"><i>Hello everyone</i></label>
            <ul class="navigator">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#qualifi">Qualifications</a></li>
                <li><a href="#contac">Contact me</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>
        </nav>   
    </div>
  
    <div class="top">
        <table cellspacing="200" >
            <tr>
                <td><img src="circle-cropped.png" alt="profile photo" width="300" height="300"></td>
                
                   <td><h1 class="topp"><em>Glad to see you here</em></h1>
                     <h2><i>I'm <span ><b>Shivangi Singh</b></span>.</i></h2>
                     <h3>A student of <em>AKGEC</em></h3>
                   </td>
                
            </tr>    
        </table>
    </div>
   <!-- <div id="home" class="content">
        <div class="image">
            <img src="circle-cropped.png" alt="profile photo" width="300"   height="300"  id="profile">

        </div>
        <div class="top">
            <h1><em>Glad to see you here</em></h1>
            <h2><i>I'm <span ><b>Shivangi Singh</b></span>.</i></h2>
            <h3>A student of <em>AKGEC</em></h3>
                  

        </div>
    </div>-->
    <br>
    <h1 id="qualifi"    style="font-family: 'Pacifico', cursive;">
        <div class="qual">
            Qualifications:
        </div>
    </h1>
    <div class="middle">
        <ul>
           <li>Academic:
               
             <ol>
                <li>I have passed my 10th Board with 95% from Bal Vikas Vidyalaya.</li>
                <br>
                <li>I have passed my 12th Board with 83.6% from Children's Garden School.</li>
                <br>
                <li>Currently, I'm pursuing B.tech in Information Technology(2nd year)from Ajay Kumar Garg Engineer College.</li>
                <br>
              </ol>
           </li>
          <li>Technical:
              <br>
            <ol> <li>A mediocre hold over JAVA programming language and passable knowledge of C programming.</li>
                <br>
                <li>Beginner level knowledge of HTML and CSS.</li>
                <br>
            </ol>
          </li>
        </ul>  



    </div> 
    

    
    <h1 id="contac" style="font-family: 'Pacifico', cursive;">
        <div class="qual">
            Contact me:
        </div>
    </h1>
    <div class="bottom">     
        <a href="https://www.facebook.com/shivi.gautam.92775" target="_blank"><i class="fa fa-2x fa-facebook"></i></td>
        <a href="https://www.instagram.com/wanderer6686/" target="_blank"><i class="fa fa-2x fa-instagram"></i></a>
        <a href="" target="_blank"><i class="fa fa-2x fa-twitter"></i></a>
        <a href="" target="_blank"><i class="fa fa-2x fa-linkedin"></i></a>
    </div>
    <div class="footer">
        <p id="copyright">&copy;Shivangi Singh</p>
        <p id="back-top"><a href="#">Going up?</a></p>
    </div>
   
</body>
</html>