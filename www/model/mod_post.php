<?php

function createOrder() {
    global $DB;
    return $DB->query('INSERT INTO mails (name, email, message) VALUES (' .$_POST['name'] . ',"'.$_POST['email'].'","'.$_POST['message'].'")');
}

function getAllOrders() {
    global $DB;
    return $DB->query('SELECT o.id, c.name AS city_name, s.name AS school_name, o.name AS orders_name, o.phone, o.email, o.status FROM orders AS o, schools AS s, cities AS c WHERE c.id=s.city_id AND o.school_id=s.id');
}