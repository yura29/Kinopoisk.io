<?php

    $connect = mysqli_connect('localhost', 'test_jaspero', '8GUzZwnf6poHVa3S', 'test_jaspero');

    if (!$connect) {
        die('Error connect to DataBase');
    }