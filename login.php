<?php require_once "db.php" ?>
<?php 
    if (!empty($_POST["sessionbtn"])) {
        if (empty($_POST["user_name"]) || empty($_POST["password"])) {
            echo "Los campos estan vacios";
        } else {
            $user = $_POST["user_name"];
            $pass = $_POST["password"];

            $sql = "SELECT * FROM users WHERE user_name = '$user' and password = '$pass'";
            $resultado = $connection->query($sql);

            if ($row = $resultado->fetch_object()) {
                header("Location: index.php");
            } else {
                echo "Datos erroneos";
            }
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <section class="my-5 mx-5">
        <div class="card">
            <div class="card-header">
                Start Session
            </div>
            <div class="card-body">
                <form action="" method="post" autocomplete="off">
                <label for="user_name">User</label>
                <input type="text" name="user_name" id="">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <input class="btn btn-primary" type="submit" value="Submit" name="sessionbtn">
                <a href="" class="btn btn-danger">Reset</a>
                <a href="register.php" class="btn btn-warning">Register</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>