<?php 

    include_once '../config/modeluser.php';

    $admin = new admin;

    if($_POST['action'] == 'simpan')
    {
        $arrdata = array('name'=>$_POST['name'],
        'username'=>$_POST['username'],
        'email'=>$_POST['email'],
        'password'=>$_POST['password']); 
        
        $statm = $admin->create('users', $arrdata);
       
        
    }else
    {
        $arrdata = array("name='".$_POST['name']."'",
        "username='".$_POST['username']."'",
        "email='".$_POST['email']."'",
        "password='".$_POST['password']."'");


    $idvalue = $_POST['adm'];
    $statm= $admin->update('users', $arrdata, 'adm', $idvalue);

    }
    if($statm)
        {
            header('Location:../page/read.php');
        }
        else
        {
            echo "gagal";
        }

?>