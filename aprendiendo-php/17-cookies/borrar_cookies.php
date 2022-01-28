<?php
$micookie = isset($_COOKIE['micookie']);
if($micookie){
    unset($_COOKIE['micookie']);
    setcookie('micookie','');
}
header('Location:ver_cookies.php');
?>

