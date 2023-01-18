<?php session_start(); 
        
          
        if(isset($_POST['Submit'])){
             
                $logins = array('admin' => 'admin');
                
                
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                $variable = $_POST['Username'];
                
                
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                       
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        echo "Welcome", $Username;
                        header("location:secret.php");
                        exit;
                } else {
                      
                    $msg="<span>Incorrect Password</span>";
                }
        }
        if(isset($_POST['Recover']) == true){
          header("Location: http://localhost:3000/KollokZaleczenie/Recover.php");
        

        }
        
        class ClassName{
            
        
                function getName()
                {
                    return $this->Username;
                }
                

        }
        class ClassPassword{

            function getPassword(){

                return $this->Password;
            }
        }
?>

<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>

    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
    <tr>
      <td></td>
      <td><input name ="Recover" type="submit" value="Recover" class="Button4"></td>
    </tr>
  </table>
</form>