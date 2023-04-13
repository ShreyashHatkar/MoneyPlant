<?php   
    include("connection.php");

    if(isset($_POST["signin"])){

        function validation($formData){
            $Data = trim( stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        //creating variables to store form details
        $FormUsername = validation($_POST['username']);
        $FormPwd = validation($_POST['password']);

        //creating a querry
        $PassRetrieveQuerry = "SELECT * FROM users WHERE UserID = '$FormUsername';";
        $result = mysqli_query($connection,$PassRetrieveQuerry);

        //check if any result is returned
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $hashedPassword = $row["pwd"];
                $user = $row["UserID"];
                $Email = $row["Email"];
                $Balance = $row["balance"];
                $Primary = $row["userNum"];
                $NameFirst = $row["Fname"];
                $NameLast = $row["Lname"];
            }

            ///authenticating the password
            if(password_verify($FormPwd,$hashedPassword)){
                //correct login
                session_start();
                $_SESSION['UserUniqueID'] = $Primary;
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $Email;
                $_SESSION['UserBalance'] = $Balance;
                $_SESSION['Name'] = $NameFirst." ".$NameLast;
    
                header("Location: home2.php");
                
            }else{
                ///authentication error
                $loginError = "<div class='alert-danger'>Invalid username/password. TRY AGAIN!!.</div>";
            }
        }else{
            //no results fetched from database
            $loginError = "<div class='alert-danger'>No such user Found. TRY AGAIN!!.<a class='close' data-dismiss='alert>&timea;</a></div>";
        }

        
        
        mysqli_close($connection);
    }

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
    <title>Login</title>
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
    /*background: url('f.jpg') no-repeat;
    background-size: cover;*/
}

#container{
    margin:auto;
    display: flex;
    color:#f8f9fa;
    flex-direction: column;
    width:500px;
    box-shadow: 1px 2px 71px -6px rgba(0,0,0,0.67);
    height:fit-content;
    font-family: 'Ubuntu', sans-serif;
    background-color: #212529;
    /*background-color: rgba(50, 50, 50, 0.5);
    backdrop-filter: blur(5px);*/
    padding:  50px 20px;
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
    border: none;
    background-color: #6c757d;
    border-bottom-right-radius:10px;
    font-size:19.2px;
    
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
.row{
    width:100%;
    height:fit-content;
    display: grid;
    grid-template-columns: 10% 90%;
    grid-template-rows: 50px;
}
.icon{
    height: 50px;
    margin-right:1px;
    background-color: #6c757d;
    border-top-left-radius: 10px;
    padding:10px;
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
    font-family: 'Ubuntu', sans-serif;
    font-size: 1.1em;
    cursor: pointer;
    transition-duration: 0.25s;
}
button:hover{
    background-color: #ffce64;
}
span{
    display: flex;
    justify-content: space-between;

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
}

    </style>
</head>
<body>
    <form id="container" class="paralax" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method ="POST">

        <h3 id="Heading">Log In</h3>
        <label>Username:</label><div class="row">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="100%"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        </div><input type="text" name="username" placeholder="Username" required></div>
        
        
        
        <label>Password:</label>
        <div class="row">
        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px"><path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"/></svg>
        </div><input type="password" name="password" placeholder="Password" required></div>

        <button type="submit" name = "signin">Sign In</button>
        <span><span><a href="">Forgot Password?</a></span>
        <span>Not a member? <a href="signup.php"> Sign Up</a></span></span>
    </form>
</body>
</html>