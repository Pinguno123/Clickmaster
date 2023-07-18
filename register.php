<?php require_once "db.php" ?>
<?php 

$user = "";
$pass = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user_name'];
    $pass = $_POST['password'];

    do {
        if (empty($user) || empty ($pass)) {
            $errorMessage = "Todos los campos son requeridos";
            break;
        }

        $sql = "INSERT INTO users (user_name,password) VALUES ('$user', '$pass')";
        $resultado = $connection->query($sql);

        if (!$resultado) {
            $errorMessage = "Invalid query: ". $connection->error;
            break;
        }

        $user = "";
        $pass = "";

        $successMessage = "Usuario agregado de forma correcta";

        header("location: /Clickmaster/login.php");
        exit;

    } while (false);

}
    
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <section class="my-5 mx-5">
        <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="" method="post">
                <label for="user_name">User</label>
                <input type="text" name="user_name" id="">
                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-danger" type="reset" value="Reset">
                <a href="login.php" class="btn btn-warning">Login</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>