<?php include("crud.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['admail']))
            header('location:login.php');
        $id = $_GET['id'];
        $tg = data_id($id);
        $fa = mysqli_fetch_assoc($tg);
    ?>
    <h2>Update Data</h2>
    <fieldset>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="uid" value="<?php echo $id; ?>">
            <img src="<?php echo $fa['File']; ?>" alt="" width="200" height="100">
            <p>
                <label for="fname">Name: </label>
                <input type="text" name="fname" id="" placeholder="Enter name" value="<?php echo $fa['Name']; ?>">
            </p>
            <p>
                <label for="sx">Gender:</label>
                <?php
                    if($fa['Gender'] == "male")
                    {
                        echo 
                        '<input type="radio" name="sx" id="" value="male" checked>Male
                        <input type="radio" name="sx" id="" value="female">Female';
                    }
                    else
                    {
                        echo 
                        '<input type="radio" name="sx" id="" value="male">Male
                        <input type="radio" name="sx" id="" value="female" checked>Female';
                    }
                ?>
            </p>
            <p>
                <label for="lg">Languages: </label>
                <?php
                    if(strpos($fa['langs'],"java") > -1)
                        echo '<input type="checkbox" name="lg[]" id="" value="java" checked>Java';
                    else
                        echo '<input type="checkbox" name="lg[]" id="" value="java">Java';

                    if(strpos($fa['langs'],"c++") > -1)
                        echo '<input type="checkbox" name="lg[]" id="" value="c++" checked>C++';
                    else
                        echo '<input type="checkbox" name="lg[]" id="" value="c++">C++';
                    
                    if(strpos($fa['langs'],"python") > -1)
                        echo '<input type="checkbox" name="lg[]" id="" value="python" checked>Python';
                    else
                        echo '<input type="checkbox" name="lg[]" id="" value="python">Python';
                ?>
            </p>
            <p>
                <label for="stm">Stream: </label>
                <select name="stm" id="">
                    <option value="<?php echo $fa['Stream']; ?>"><?php echo $fa['Stream']; ?></option>
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
            <button type="submit" name="upt">UPDATE</button>
        </form>
    </fieldset><br>
    <a href="dash.php">Back to Dashboard</a>
    <?php
        if(isset($_POST['upt']))
        {
            $res = updstd($_POST);
            if($res)
                header('location:dash.php');
            else
                echo $res;
        }
    ?>
</body>
</html>