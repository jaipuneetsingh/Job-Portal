<?php
session_start();
unset($_SESSION['recute_id']);
unset($_SESSION['recute_unm']);
session_destroy();
header("location:index.php");

?>