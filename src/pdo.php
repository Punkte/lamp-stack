<?php

$pdo = new PDO('mysql:host=iim_mysql', 'root', 'pwd');
$databases = $pdo->query('SHOW DATABASES')->fetch(PDO::FETCH_ASSOC);

var_dump($databases);