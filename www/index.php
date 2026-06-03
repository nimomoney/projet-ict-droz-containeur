<?php

$host = 'mariadb';
$db   = 'app';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Connexion à MariaDB : OK</h1>";
} catch (PDOException $e) {
    echo "<h1>Erreur de connexion : " . $e->getMessage() . "</h1>";
}

echo "<h2>Version PHP : " . phpversion() . "</h2>";

$extensions = ['pdo_mysql', 'intl', 'mysqli'];
echo "<h2>Extensions :</h2><ul>";
foreach ($extensions as $ext) {
    $status = extension_loaded($ext) ? '✅' : '❌';
    echo "<li>$ext : $status</li>";
}
echo "</ul>";

phpinfo();