<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <?php
    include 'dbh.php';

    if (!isset($_POST['submit'])) {
        echo "click the submit button";
    } else {
        // checking if the fields are empty
        if (empty($_POST['username']) || empty($_POST['pwd'])) {
            // send the user to the index page to fill in all the details
            header("Location: index.php?empty=username&password" . $username);
            exit();
        } else {
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];
            $pwdhash = md5($pwd);
            $sql = "INSERT INTO users(username, pwd) VALUES ('$username', '$pwdhash');";
            $results = mysqli_query($conn, $sql);

            // checking the user has been logged in

            if ($results) {
                echo "<div class='username'>".$username."</div><br>";
                
            }
        }
    }

    //
    ?>
<a href="index.php">login</a>
</body>

</html>