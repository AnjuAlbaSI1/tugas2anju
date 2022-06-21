<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ASSET ?>css/auth.css">
    <title>PLN</title>
</head>
<?php
    require_once "config.php";

    $auth = new App\Auth();

    if (isset($_POST['submit'])) {
        $auth->login();
        header("location:index.php");
    }
?>
<body>
    <div class="container">
        <div class="box-login">
            <div style="padding-top: 20px;">LOGIN PLN </div>
            <div style="padding-top: 20px;">Anju Alba Sitompul </div>
            <form method="POST">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>