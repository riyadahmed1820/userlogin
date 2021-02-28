<?php
   // $filepath("Information.txt")
    
    $file=fopen("Information.txt","r");
    while(!feof($file)) {
  echo fgets($file) . "<br>";
}
    
?>
<html>

<head>
    <title> Login</title>
</head>
<body>
<form method ="POST">

<table>
     <tr>
         <td>
             UserName
         </td>
        <td>
             <input type="text" name="uname">
          </td>
    </tr>
    <tr>
         <td>
             Password
        </td>
        <td>
             <input type="Password" name="pwd">
         </td>
    </tr>
    <tr>
         <td>
             <input  type="submit" name="Login" value="Login">
        </td>
    </tr>
                

      <tr>
       <td>
             <input  type="submit" name="SignUp" value="SignUp">
         </td>        
     </tr>
 <?php

if(isset($_POST["SignUp"]))
{
    echo "<script>location.href='file handling.php'</script>";
}
if(isset($_POST["Login"]))
{
 echo "<script>location.href='Welcompage.php'</script>";
}
?>
</form>
</body>
</html>
