<?php 

include_once '../config/modeluser.php';

$admin = new admin;

    if(isset($_GET['id'])) 
    {
        $id = $_GET['id'];
    
        $hasil = $admin->delete('users', $id);
        if($hasil)
        {
            header('Location:../page/read.php');
        }
        else
        {
            echo "Gagal Hapus";
        }
    }
    ?>
?>