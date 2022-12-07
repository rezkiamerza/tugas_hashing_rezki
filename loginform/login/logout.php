<?php
session_start();
$_SESSION= [];
session_unset();
session_destroy();

header("location: \loginform\index.php");
exit;
?>