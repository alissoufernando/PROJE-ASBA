<?php
session_start();
if (isset ($_COOKIE['nom']))
{setcookie('nom', '', -1);
setcookie('photoprofil', '', -1);
}
session_destroy();
header ('Location:index.php');
?>