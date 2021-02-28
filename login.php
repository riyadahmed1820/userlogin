<?php
   // $filepath("Information.txt")
    
    $file=fopen("Information.txt","r");
    $s1=fread($file,filesize("Information.txt"));
    $data=(explode("\n",$s1));
    echo $data[0];
    echo "<br>";

    fclose($file);
    
    
?>
<html>

<head>
    <title> Login</title>
</head>
<body>
<form>

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
</form>
</body>