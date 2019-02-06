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
        $userName = $_POST['username'];
        $password = $_POST['password'];
       
        if(($userName == "admin") && ($password == "admin123")) {
            echo "<h1>Good to see you again $userName</h1>";
            echo "<a href=\"http:localhost:3000/www/../../index.html\">Homepage</a>";
        }

        else {
            echo "<h1>Your account details do not match. Please try again.</h1>";
            echo "<br/>";
            echo "<a href=\"http:localhost:3000/www/../../index.html\">Homepage</a>";
            echo "<br/>";
            echo "$list[0]";
        }
    ?>
</body>
</html>