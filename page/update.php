<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data postingan</title>
</head>
<body>
        <?php 

        include_once '../config/modeluser.php';

        $admin = new admin;

            if(isset($_GET['id'])) 
            {
                $id = $_GET['id'];
        
                $update = $admin->read('users','adm', $id);


                foreach ($update as $upd) {
                    $adm = $upd['adm'];
                    $name = $upd['name'];
                    $username = $upd['username'];
                    $email = $upd['email'];
                    $password = $upd['password'];
                    $readonly = 'readonly';
                    $action = 'update';
                }
            }
            else{
                $adm = '';
                $name = '';
		        $username = '';
		        $email = '';
		        $password = '';
                $readonly = 'readonly';
                $action = 'create';

            }
        ?>
    
    <form action="../php/updateact.php" method="post">
        <h1>Update Data</h1>
            <ul>
                <li>
                    <label for="adm">Id Admin :</label>
                    <input type="number" name="adm" value="<?php echo $adm; ?>" <?php echo $readonly; ?>>
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                </li>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </li>
                <li>
                    <label for="email">email :</label>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="text" name="password" value="<?php echo $password; ?>">
                </li>
                <li>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" value="Reset">
			        <input type="hidden" name="action" value="<?php echo $action; ?>">

                      
                </li>
            </ul>
</form>
</body>
</html>