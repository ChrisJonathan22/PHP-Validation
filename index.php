<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
    <section id="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </section>
    <h1>Please sign in</h1>
    <form action="signin.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td class="center"><input type="text" name="username" id="username" size="30" placeholder="username*" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td class="center"><input type="password" name="password" id="password" size="30" placeholder="password*" autocomplete="off"></td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Submit">
    </form>
</body>
</html>
