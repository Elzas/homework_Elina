<?php

function connect_to_db() {
    $config = array(
        'host' => 'genaker.mysql.ukraine.com.ua',
        'user' => 'genaker_db',
        'password' => 'ae1804bt',
        'database' => 'genaker_db'
    );

    try {
        $DB = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['database'], $config['user'], $config['password']);
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $DB->exec("SET names utf8");
        return $DB;
    } catch (PDOException $e) {
        echo 'DB Connection failed: '.$e->getMessage();
        exit;
    }
}

