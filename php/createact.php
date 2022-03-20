    <?php

        include_once '../config/modeluser.php';

        $admin = new admin;
        $arrdata = array( 'adm' => $_POST['adm'], 'name' => $_POST['name'], 'username' =>$_POST['username'], 'email' => $_POST['email'], 'password' => $_POST['password']);


        $statm = $admin->create('users', $arrdata);
        if($statm == "sukses")
        {
            header('Location:../page/read.php');
        }
        else
        {
            echo "gagal";
        }




    ?>
