<?php

try {
    $connect = mysqli_connect('localhost', 'root', '', 'hirehub');
} catch (Exception $e) {
    die('Falha na conexão'. $e->getMessage());
}

?>