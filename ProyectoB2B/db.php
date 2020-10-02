<?php
ob_start();
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'PROYECTO_B2B'
);
ob_end_flush();
?>