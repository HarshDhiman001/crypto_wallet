<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/clg_project/php/index.php");
exit();
?>