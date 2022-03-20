<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="../php/createact.php" method="post">
        <h1>register form</h1>
        <table>
        <ul>
            <li>
                <label for="adm">id admin : </label>
                <input type="text" name="adm" id="adm">
            </li>
            <li>
                <label for="name">name : </label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <button type="submit">register</button>
            </li>
        </ul>
        </table>
    </form>
</body>
</html>