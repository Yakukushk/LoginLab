<!DOCTYPE html>
<?php

if(isset($_POST['submit'])){
$user = $_POST['username'];
$pass = $_POST['password'];
if($user === "admin" && $pass = "admin"){

    echo("user signed in");
}
else {
 echo("Error!");

}

}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Application</title>
</head>
<body>
    <form action="/secret.php" method="post">
        <table align="center">
            <tr>
                <td> username : </td>
                <td><input type="text" name="username" placeholder="enter your username"></td>
            </tr>
            <tr>
                <td> password : </td>
                <td><input type="password" name="password" placeholder="enter your password"></td>
            </tr>
            <tr>
                <td><td>
                <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
</body>
