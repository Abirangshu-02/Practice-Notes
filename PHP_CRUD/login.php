<?php include("crud.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Login</h1>
    <fieldset>
        <form action="" method="post">
            <p><input type="email" name="mail" id="" placeholder="Enter Email"></p>
            <p><input type="password" name="pkey" id="" placeholder="Enter Password"></p>
            <button type="submit" name="sbt">LOGIN</button>
        </form>
    </fieldset>
    <?php
        session_start();
        if(isset($_POST['sbt']))
        {
            $res = login($_POST);
            $rc = mysqli_num_rows($res);
            if($rc > 0)
            {
                $_SESSION['admail'] = $_POST['mail'];
                header('location:dash.php');
            }
            else
                echo "Unsuccessful";
        }
    ?>
</body>
</html>