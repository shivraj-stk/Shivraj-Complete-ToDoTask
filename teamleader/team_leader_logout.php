<?php
//session destroys and redirect to main team leader home page
session_destroy();
header('location:../index.php');
?>