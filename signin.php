<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <?php 
        // Once the form details are posted from index.php capture -
        // the username and password.
        $userName = $_POST['username'];
        $password = $_POST['password'];
       
        // Compare both the username and password and if there is a -
        // match display the message below and display a link -
        // back to the homepage.
        if(($userName == "admin") && ($password == "admin123")) {
            echo "<h1>Good to see you again $userName</h1>";
            echo "<a href=\"http:localhost:3000/www/../../index.php\">Homepage</a>";
        }

        // If the user's details do not match display the message below and -
        // display a link back to the homepage.
        else {
            echo "<h1>Your account details do not match. Please try again.</h1>";
            echo "<br/>";
            echo "<a href=\"http:localhost:3000/www/../../index.php\">Homepage</a>";
        }
    ?>
</body>
</html>