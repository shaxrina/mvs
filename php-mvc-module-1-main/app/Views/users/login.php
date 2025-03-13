<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 

        if (isset($_SESSION['error'])) { 
            echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>"; 
            unset($_SESSION['error']);
        }
    ?>
    <form action="/users/login" method="post">
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Login</button>
    </form>
    <hr>
    <p>Ro'yxatdan o'tmaganmisz? <a href="/users/register">Register qiling</a></p>
</body>
</html>