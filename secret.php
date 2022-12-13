<?php session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
        
        header("location:Login.php");
        $user = $request->$_POST['username'];
        $pass = $request->$_POST['password'];
    
        var_dump('Here!');
        var_dump($user, $pass);
    
       exit;
}



?>
Succesfully!<?php ?> <a href="logout.php">Click here</a> to Logout. 