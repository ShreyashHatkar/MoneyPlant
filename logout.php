<?php
    session_start();
    //is cookie recieved by session
    if(isset($_COOKIE[session_name()])){

        //clear cookie
        setcookie(session_name(),'',time()-86400,'/');
    }
    //clearing all the set variables
    session_unset();

    //destroy the session
    session_destroy();

    echo "Logged Out.";

    echo "<p><a href='login.php'>Go to Login</a></p>";
?>