<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta&display=swap" rel="stylesheet">
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;   
    font-family: 'Lexend Peta', sans-serif; 
    }
    body{
        background-image: url(https://cdn5.vectorstock.com/i/1000x1000/78/04/open-book-background-flat-design-vector-5877804.jpg);
        padding: 0;
        margin: 0;
        background-position: center;
        background-size: cover;
        font-family: 'Lexend Peta', sans-serif;
    }
    .hea{
        margin-top: 10px;
        width: 400px;
        color: black;
        
        font-family: 'Lobster', cursive;
        height: 50px;
        
        background-color: white;
        border-radius: 10px;
         margin-bottom: 0 px;
         justify-content: center;
         display: flex;
         margin-left: 450px;
    }
    .star{
        padding: 0;
        margin: 0;
        width: 100%;
    
        height: 100px;
    
    }
    
    .topcontainer{

        margin: 20px 10px 101px 500px ;
        justify-content: center;
        height: 50px;
        width: 50px;
        

    }  

    #fifth, #thrd{

        justify-content: center;
        width: 265px;
        padding: 10px 0px 0px 18px;
        height: 50px;
        background-color:rgb(235, 168, 168);
        height: auto;

    }
    .abc{

      
      margin-top: 250px;
      margin-left: 450px;
      margin-right: 450px;
      display: flex;
      padding: 10px 50px 10px 0px;
      justify-content: space-evenly;


    }

    .abc a{
        
        padding: 8px 10px 10px 10px;


    }
    #abcd{

        height: 40px;
        border-radius: 10px;
        background-color: lightblue;
        padding: 0px 10px 0px 10px ;
           }
</style>

</head>
<body>
<?php
include 'connect.php';
if(isset($_POST['loginsubmit']))
{
    $email = $_POST['myemail'];
    $password = $_POST['psw'];
    $password = md5($password);
    $emailsearch = "select * from studentdata where email='$email' AND passw='$password'";
    $query = mysqli_query($conn,$emailsearch);
    $email_count = mysqli_num_rows($query);
     if($email_count)
    {
        $_SESSION['email']=$email;
        header('location: welcome.php');  
    }
    else{
    echo "invalid email or password";
    }
}

?>
<form id="form" action="login.php" method="POST">
        <h1 class="hea">Login here</h1>
         <div class="topcontainer"> 
            <br>
            <div id="thrd">s
                <input type="email" placeholder="Email" name="myemail" required>
            </div>
            <br>
            <div id="fifth">

                <input type="password" placeholder="Enter Password..." name="psw" required>
            </div>
            <br>
       
        </div>
          <div class="abc">
          <button id="abcd" type="submit" name="loginsubmit">Login</button>
    
        </div>

    </form>

</body>
</html>

