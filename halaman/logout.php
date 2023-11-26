<?php

session_destroy();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
exit;
?>