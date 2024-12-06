<?php include("crud.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['admail']))
            header('location:login.php');
    ?>
    <h1>Welcome <?php echo $_SESSION['admail']; ?></h1>
    <button><a href="addP.php">Add Student</a></button>
    <button><a href="logout.php">LOGOUT</a></button>
    <button><a href="dash.php">Reload</a></button>
    <table border=4 style="min-width: 100%;">
        <thead>
            <td align=center>Image</td>
            <td align=center>Name</td>
            <td align=center>Gender</td>
            <td align=center>Language/s</td>
            <td align=center>Stream</td>
            <td align=center>Action</td>
        </thead>
        <tbody>
            <?php
                $sv = alldata();
                if($sv)
                {
                    while($dt = mysqli_fetch_assoc($sv))
                    {
                        echo 
                        '<tr>
                            <td align=center><img src="'.$dt["File"].'" alt="" width="200" height="170"></td>
                            <td align=center>'.$dt["Name"].'</td>
                            <td align=center>'.$dt["Gender"].'</td>
                            <td align=center>'.$dt["langs"].'</td>
                            <td align=center>'.$dt["Stream"].'</td>
                            <td align=center>
                                <a href="edit.php?id='.$dt["id"].'">Edit</a><br><br>
                                <a href="delete.php?id='.$dt["id"].'">Delete</a>
                            </td>
                        </tr>';
                    }
                }
                else
                    echo "<br><br>no matches found";
            ?>
        </tbody>
    </table>
</body>
</html>