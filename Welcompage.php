 <form method ="POST">
 <input  type="submit" name="back" value="Back">
 </form>
 <?php
 if(isset($_POST["back"]))
{
    echo "<script>location.href='Login.php'</script>";
}
?>