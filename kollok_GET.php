<?php
if($_GET["Name"] || $_GET["Age"]){
echo "Welcome".$_GET["Name"]. "<br />";
echo "You are".$_GET["Age"]."years old";
exit();

}
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
