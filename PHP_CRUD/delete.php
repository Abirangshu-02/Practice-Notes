<?php
    include('crud.php');
    $id = $_GET['id'];
    $tg = delst($id);
    if($tg)
        header('location:dash.php');
    else
        echo "Detetion unsuccessful";
?>