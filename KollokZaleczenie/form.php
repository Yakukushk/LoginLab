<?php
$key = isset($_POST['key']) ? $_POST['key'] : '';
$reset = isset($_POST['reset']) ? $_POST['reset'] : '';

if(isset($_POST['submit_password']))
{
   
  $email=$_POST['email'];
  $pass=$_POST['password'];

 

}
if(isset($_POST['Return']) == true){
    header("Location: http://localhost:3000/KollokZaleczenie/Login.php");
  }

?>
 <form action="" method="post" name="Form">
  <table>
    <tr>
      <td></td>
      <p>Password has changed</p>
      <td><input name ="Return" type="submit" value="Return" class="Button4"></td>
    </tr>
  </table>