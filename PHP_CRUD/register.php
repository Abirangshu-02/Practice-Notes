<?php include("crud.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>Registration</h1>
    <fieldset>
        <form action="" method="post">
            <p><input type="text" name="fname" id="" placeholder="Enter Full name"></p>
            <p><input type="email" name="mail" id="" placeholder="Enter Email"></p>
            <p><input type="password" name="pkey" id="" placeholder="Enter Password"></p>
            <button type="submit" name="sbt">REGISTER</button>
        </form>
    </fieldset>
    <?php
        if(isset($_POST['sbt']))
        {
            $res = indata($_POST);
            if($res)
                echo "Registeraion Done!! => Login Now";
            else
                echo "Unsuccessful";
        }
    ?>
</body>
</html>