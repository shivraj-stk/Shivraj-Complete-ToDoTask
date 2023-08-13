<?php
//session destroys and redirect to main home page
session_destroy();
header('location:../index.php');
?>