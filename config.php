<?php
    //Create my config connection
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastrobd');

    $conn = new MySQLi(HOST, USER, PASS, BASE);
?>