<?php
namespace KollokZaleczeniel;
if (!empty($_REQUEST['button'])) {
    $pass = $_REQUEST['password'];
    $cpass = $_REQUEST['cpassword'];
    $hash = $_REQUEST['hash'];
     $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
     $specialChars = preg_match('@[^\w]@', $pass);
     $password_hash = isset($_POST['NewPassword']) ? $_POST['NewPassword'] : '';
     $hash = new hash;
     $output_hash = $hash->new_Password();
     echo $password_hash;
     if($output_hash != null){
    if ($pass != $cpass || strlen($pass) < 8 || strlen($cpass) < 8 || !$uppercase || !$lowercase || !$number || !$specialChars) {
        
        echo "<script> alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
    } else {
        echo "<script> alert(' Success ')</script>"; 
        header("Location: http://localhost:3000/KollokZaleczenie/form.php");

    }
}
}


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
    <p><?php  $password_hash = isset($_POST['NewPassword']) ? $_POST['NewPassword'] : ''; echo $password_hash ?></p>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="inner">
            <div class="welcome">
                A simple Registration Form
            </div>
            <div class="registration_options">
                <form action="" method="post">
                    <div class="rleft_body">

                        <br>
                        <label for="">
                            Enter your password here
                        </label>
                        <br>
                        <label for="">
                            Enter password again here
                        </label>
                        <!-- <br>
                        <label for="">
                            Enter your Hash
                        </label> -->
                    </div>
                    <div class="rright_body">
                        
                        <br><br>
                        <input type="password" name="password" id="">
                        <br><br>
                        <input type="text" name="cpassword" id="">
                        <!-- <br><br>
                        <input type="text" name="hash" id=""> -->
                    </div>
                    <div class="registration_submit">
                        <input type="submit" value="Save" id="save" name="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>