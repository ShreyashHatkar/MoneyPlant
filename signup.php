<?php
    include("connection.php");

    function confirmPass($Password,$ConfPass){     
        $isSame = strcmp($Password,$ConfPass);
        if(!$isSame){
            echo "<script type=\"text/javascript\"> location.href= \"login.php\";</script>";
        }else{
            echo "<script type=\"text/javascript\"> alert(\"password dosent match\");</script>";
        }
    }

    if(isset( $_POST["check_signup"])){
        function validation($datafeed){
            $formData =trim(stripslashes(htmlspecialchars($datafeed)));
            return $formData;
        } 

        $UsernameAvailable = $FnameAvailable = $LnameAvailable = $Password = $ConfirmPasswordAvailable = $EmailAvailable = "";
        //Check if username field is filled  
        if( !$_POST["username"]){
            $UsernameNotFound = "<script type=\"text/javascript\"> alert(\"Username field is empty. RETRY!!\");</script>";
        }else{
            $UsernameAvailable = validation($_POST["username"]);
        }

        //check if first name is filled
        if( !$_POST["Fname"]){
            $FnameNotFound = "<script type=\"text/javascript\"> alert(\"First Name field is empty. RETRY!!\");</script>";
        }else{
            $FnameAvailable = validation($_POST["Fname"]);
        }

        //check if last name is filled 
        if( !$_POST["Lname"]){
            $LnameNotFound = "<script type=\"text/javascript\"> alert(\"Last Name field is empty. RETRY!!\");</script>";
        }else{
            $LnameAvailable = validation($_POST["Lname"]);
        }

        //check if Email is provided
        if( !$_POST["Email"]){
            $EmailNotFound = "<script type=\"text/javascript\"> alert(\"Email field is empty.. RETRY!!\");</script>";
        }else{
            $EmailAvailable = validation($_POST["Email"]);
        }


        //check if Password is fed
        if( !$_POST["Password"]){
            $PasswordNotFound = "<script type=\"text/javascript\"> alert(\"Password field is empty. RETRY!!\");</script>";
        }else{
            $PasswordAvailable = validation($_POST["Password"]);
            $hashedPassword = password_hash($PasswordAvailable, PASSWORD_DEFAULT);
        }


        //check if Confrim password is there
        if( !$_POST["ConfirmPassword"]){
            $ConfirmPasswordNotFound = "<script type=\"text/javascript\"> alert(\"Confirm Password field is empty. RETRY!!\");</script>";
        }else{
            $ConfirmPasswordAvailable = validation($_POST["ConfirmPassword"]);
        }
    

        if($FnameAvailable && $LnameAvailable && $UsernameAvailable && $EmailAvailable && $PasswordAvailable && $ConfirmPasswordAvailable){
            $insertQuerry = "INSERT INTO users(userNum,Fname,Lname,UserID,Email,pwd) VALUES(NULL,'$FnameAvailable','$LnameAvailable','$UsernameAvailable','$EmailAvailable','$hashedPassword');";
            $TransactionHist = "CREATE TABLE '$UsernameAvailable'(TranNum INT PRIMARY KEY AUTO_INCREMENT , StockName VARCHAR(20),Price INT, Sell INT(1),Buy INT(1));";

            if(isset($_POST["Password"]) and isset($_POST["ConfirmPassword"])){
                confirmPass($_POST["Password"],$_POST["ConfirmPassword"]);
            }

            if(mysqli_query($connection,$insertQuerry)){
                echo "New record updated!!";
            }else{
                echo "ERROR: ". $insertQuerry . mysqli_error($connection);
            }
        }   
    }

    mysqli_close($connection);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Chivo Mono', monospace;
}
body{
    display: flex;
    height: 100vh;
    background-color: #343a40;
}
#container{
    margin:auto;
    display: flex;
    color:#f8f9fa;
    flex-direction: column;
    width:500px;
    box-shadow: 1px 2px 71px -6px rgba(0,0,0,0.67);
    height:fit-content;
    font-family:sans-serif;
    background-color: #212529;
    padding:50px 20px;
    border-radius: 10px;
}
#Heading{
    padding:10px;
    text-align: center;
    font-size: 2.5em;
    font-weight: 900;
}
label{
    font-size: 1.2em;
    font-weight: 500;
    margin:10px 0px;
}
input{
    padding:10px;
    border-top-right-radius: 10px;
    height: 50px;
    background-color: #6c757d;
    border-bottom-right-radius:10px;
    outline: none;
    border: none;
    font-size:19.2px;
    transition-duration: 0.15s;
    
    color:#f8f9fa;
}
input:focus{
    outline: none;
    background-color: none;
}
input::placeholder{
    color:#f8f9fa;
    font-size: 19.2px;
}
.row:not(.name){
    width:100%;
    height:fit-content;
    display: grid;
    grid-template-columns: 10% 90%;
    grid-template-rows: 50px;
}
.name{
    width:100%;
    height: fit-content;
    display: flex;
    margin-top:20px;

}
.name>input{
    width:calc(50% - 5px);
    margin:5px;
    border-radius: 10px;;
}
.icon{
    height: 50px;
    background-color: #6c757d;
    border-top-left-radius: 10px;
    padding:10px;
    margin-right:1px;
    border-bottom-left-radius: 10px;
    fill:white;
}
button{
    width:fit-content;
    margin:20px auto;
    padding:10px 20px;
    outline: none;
    border: none;
    border-radius: 20px;
    font-weight: 700;
    color:white;
    background-color: #FFBC28;
    font-family:sans-serif;
    font-size: 1.1em;
    cursor: pointer;
    transition-duration: 0.25s;
}
button:hover{
    background-color: #ffce64;
}
span{
    display: flex;
    justify-content: flex-end;

}
a{
    text-decoration: none;
    color:#FFD577;
}
span>span>a{
    margin:0px 5px
}
a:hover{
    color: #FFBC28;
#MsgBx{
    width:100%;
    position: absolute;
    top:0px;
    left:0px;
    height:auto;
    padding:20px;
}
#MsgBx>li{
    list-style: none;
    color: white;
    border-radius: 5px;
    padding:10px;
    background-color: #FFBC28;
    width:fit-content;
    font-family: 'Ubuntu', sans-serif;
    position: relative;
    animation: enteranceError 1s ease;
    margin:5px;
}
input:focus{
    border:5px solid #FFD577;
    height: 49px;
    margin-top:2px;
}

    </style>
</head>
<body>
    <form id="container" name = "main.php" method = "POST">
 
        <h3 id="Heading">Sign Up</h3>
        
        <label>Username:</label><div class="row">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="100%"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div><input name="username" type="text" placeholder="Username" required></div>
        <div class="row name"><input type="text" placeholder="First Name" name="Fname"><input type="text" placeholder="Last Name" name="Lname"></div>
        <label>Email:</label><div class="row">
            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="100%"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></div><input type="email" placeholder="Email"  name="Email" required></div>
        <label>Password:</label>
        <div class="row">
        
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px"><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg></div><input type="password" placeholder="Password"  name="Password" required></div>
        <label>Confirm Password:</label>
        <div class="row">
        
            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px"><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg></div><input type="password" placeholder="Confirm Password" name="ConfirmPassword" required></div>

        
        <button type="submit" name="check_signup">Sign Up</button>
        <span>
        <span>Already have Account <a href="login.php"> Sign In</a></span></span>
    </form>
</body>
</html>