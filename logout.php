<?php
session_start();
$old_user=$_SESSION['valid_user'];
 if((!isset($_POST['submit']))&&(!isset($_SESSION['vaild_user'])))
 header('Location: index.php');
 else
 {
unset($_SESSION['valid_user']);
session_destroy();
setcookie("user","",time()-3600);
header('Location: index.php');
}
?>
