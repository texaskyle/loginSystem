

<?php
include 'dbh.php';

if (!isset($_POST['submit_login'])) {
    echo "click the submit button";
} else {
    // checking if the fields are empty
    if (empty($_POST['username']) || empty($_POST['pwd'])) {
        // send the user to the index page to fill in all the details
        header("Location: login.php?empty=username&password" . $username);
        exit();
    } else {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $pwdhash = md5($pwd);
        // checking if the user exist in the database
        $sql ="SELECT id FROM users WHERE username='$username' AND pwd='$pwdhash'";
        $sql_run=mysqli_query($conn, $sql);

        if (mysqli_num_rows($sql_run)==1) {
            echo "you have been logged in as ".$_POST['username'];
        }else{
            echo "incorrect username and password";
        }

        // checking the user has been logged in

        
    }
}

//
?>