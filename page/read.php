<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data postingan</title>
</head>
<body>
    <table>
        <h1>Read Data</h1>
        <tr>
            <th>Id Admin</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include_once '../config/modeluser.php';

            $admin = new admin;

            $users = $admin->read('users', null, null);

                foreach ($users as $usr) {
                    ?>
                        <tr>
                            <td><?php echo $usr['adm']; ?></td>
                            <td><?php echo $usr['name']; ?></td>
                            <td><?php echo $usr['username']; ?></td>
                            <td><?php echo $usr['email']; ?></td>
                            <td><?php echo $usr['password']; ?></td>
                            <td>
                                <a href="update.php?id=<?= $usr['adm']?>">Edit</a>
                                <a href="deleteact.php?id=<?= $usr['id']?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
    </table>
</body>
</html>