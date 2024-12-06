<?php
    function connect()
    {
        $con = mysqli_connect("localhost","root","","practice");
        return $con;
    }
    function indata($data)
    {
        $nm = $data['fname'];
        $mail = $data['mail'];
        $pkey = $data['pkey'];

        $con = connect();
        $sql = "insert into admin(fstnm,email,pkey) values('$nm','$mail','$pkey')";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function login($data)
    {
        $mail = $data['mail'];
        $pkey = $data['pkey'];

        $con = connect();
        $sql = "select * from admin where email = '$mail' and pkey = '$pkey'";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function adstd($data)
    {
        $con = connect();
        $nm = $data['fname'];
        $g = $data['sx'];
        $s = $data['stm'];
        $pl = implode(',',$data['lg']);
        
        $dir = "storage/";
        $file = $dir . basename($_FILES['pic']['name']);
        if(!file_exists($file))
        {
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$file))
            {
                $sql = "insert into adddetails(Name,Gender,langs,Stream,File) values('$nm','$g','$pl','$s','$file')";
                $res = mysqli_query($con,$sql);
                return $res;
            }
            else
                return "not inserted";
        }
        else
            return "already present";
    }
    function alldata()
    {
        $con = connect();
        $sql = "select * from adddetails";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function data_id($id)
    {
        $con = connect();
        $sql = "select * from adddetails where id = '$id'";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function delst($id)
    {
        $con = connect();
        $rp1 = data_id($id);
        $rp2 = mysqli_fetch_assoc($rp1);

        $sql = "delete from adddetails where id = '$id'";
        $res = mysqli_query($con,$sql);
        if($res)
            unlink($rp2['File']);
        return $res;
    }
    function updstd($data)
    {
        $con = connect();
        $uid = $data['uid'];
        $nm = $data['fname'];
        $g = $data['sx'];
        $s = $data['stm'];
        $pl = implode(',',$data['lg']);
        
        $dir = "storage/";
        $file = $dir . basename($_FILES['pic']['name']);
        if(empty($_FILES['pic']['name']))
        {
            $sql = "update adddetails set Name='$nm', Gender='$g', langs='$pl', Stream='$s' where id='$uid'";
            $res = mysqli_query($con,$sql);
            return $res;
        }
        else
        {
            if(!file_exists($file))
            {
                if(move_uploaded_file($_FILES['pic']['tmp_name'],$file))
                {
                    $rp1 = data_id($uid);
                    $rp2 = mysqli_fetch_assoc($rp1);
                    unlink($rp2['File']);

                    $sql = "update adddetails set Name='$nm', Gender='$g', langs='$pl', Stream='$s', File='$file' where id='$uid'";
                    $res = mysqli_query($con,$sql);
                    return $res;
                }
                else
                    return "not inserted";
            }
            else
                return "already present";
        }
        
    }
?>