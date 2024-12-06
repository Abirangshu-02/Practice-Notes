<?php include("crud.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['admail']))
            header('location:login.php');
    ?>
    <h2>Add Data</h2>
    <fieldset>
        <form action="" method="post" enctype="multipart/form-data">
            <p>
                <label for="fname">Name: </label>
                <input type="text" name="fname" id="" placeholder="Enter name">
            </p>
            <p>
                <label for="sx"></label>Gender: 
                <input type="radio" name="sx" id="" value="male">Male
                <input type="radio" name="sx" id="" value="female">Female
            </p>
            <p>
                <label for="lg">Languages: </label>
                <input type="checkbox" name="lg[]" id="" value="java">Java
                <input type="checkbox" name="lg[]" id="" value="c++">C++
                <input type="checkbox" name="lg[]" id="" value="python">Python
            </p>
            <p>
                <label for="stm">Stream: </label>
                <select name="stm" id="">
                    <option value="">Choose Stream</option>
                    <option value="CSE">CSE</option>
                    <option value="IT">IT</option>
                    <option value="FT">FT</option>
                    <option value="EE">EE</option>
                </select>
            </p>
            <p>
                <label for="pic">Photo: </label>
                <input type="file" name="pic" id="">
            </p>
            <button type="submit" name="ins">INSERT</button>
        </form>
    </fieldset><br>
    <a href="dash.php">Back to Dashboard</a>
    <?php
        if(isset($_POST['ins']))
        {
            $res = adstd($_POST);
            if($res)
                header('location:dash.php');
            else
                echo "Not inserted";
        }
    ?>
</body>
</html>