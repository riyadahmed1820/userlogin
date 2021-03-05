<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<?php
    $uname = $password = $unameErr = $passwordErr = $msg = "";
    $flag = 0;
    $filepath = "info.txt";
    $f = fopen($filepath,'r');
 
    if ($_SERVER["REQUEST_METHOD"] =="POST" )
    {
        if(empty($_POST['uname'])) 

            {
                $unameErr = "Please Fill Up the UserName";
            }
            else
            {
                $uname = $_POST['uname'];
            }

        if(empty($_POST['password'])) 

            {
                $passwordErr = "Please Fill Up the Password";
            }
            else
            {
                $password = $_POST['password'];
            }



            while($row = fgets($f)) {

                list($userName,$password,$firstName,$lastName,$email,$gender,$recoveryEmail) = explode( ",", $row );
                
        
                if($userName == $uname && $password == $password){
                    $flag++;
                    echo "<script>location.href='Welcompage.php'</script>";
                    break;
                }
        
              
        
            }

            if(isset($_POST["signup"]))
        {   
             
            echo "<script>location.href='reg.php'</script>";
        }
        
           /*if ($flag>0)
            {
                $msg = "Successful";
                echo $msg;
                echo "<br>";
        
                $_SESSION['userId'] = $uname;
                $_SESSION['password'] = $password;
            
                echo "User Id is: " . $_SESSION['userId'];
                echo "<br>";
                echo "Password is: " . $_SESSION['password'];
            }*/
        
            else
            {
                $msg = "Try Again";
                echo "Unsuccessful! " .$msg;
            }


    }




    session_unset();
    session_destroy();
    fclose($f);


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <h1 style="text-align: center;">Login-form</h1>
    <fieldset>
         <legend>Login Info</legend>
         <table>
        <tr>
         <td>
             UserName
         </td>
        <td>
             <input type="text" name="uname" value="">
          </td>
        </tr>

        <tr>
         <td>
            Password
        </td>
        <td>
             <input type="password" name="password" value="" >
         </td>
    </tr>

     

    
            </table>                   
    </fieldset>
    <br> <br> <input type="submit" name="login" value="Login">
    <br> <br> <input type="submit" name="signup" value="Signup">
</form>
    
</body>
</html>