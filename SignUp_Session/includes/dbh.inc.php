<?php
    
    $host = 'localhost';
    $dbname = 'myfirstdatabase';
    $dbusername = 'root';
    $dbpwd = 'root';

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        die("Connection failed: ". $e->getMessage());
    }