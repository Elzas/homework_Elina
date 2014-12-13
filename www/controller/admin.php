<?php

$gtpl = 'admin';

if (!empty($_SESSION['admin'])) {
    
    if (empty($url[2])) {
        $url[2] = 'home';
    }
    if (is_file('controller/admin/' . $url[2] . '.php')) {
        require 'controller/admin/' . $url[2] . '.php';
    } else {
        echo 'Admin page not found!';
        exit;
    }
} else {
    
    $tpl = 'login';
    if (!empty($_POST)) {

        $rez = $DB->prepare('SELECT * FROM users WHERE login=:login')->
                execute(array(':login' => $_POST['login']));

        $rez = $DB->query('SELECT * FROM users WHERE login="' . $_POST['login'] . '" AND pass="' . md5($_POST['password']) . '"');
        $user = $rez->fetch();

        if (!empty($user)) {
            $DB->query('UPDATE users SET date_login=NOW() WHERE id="' . $user['id'] . '"');

            $_SESSION['admin'] = $user['username'];
            header('Location: /admin/home');
        } else {
            $error = 'Неправильний логин/пароль';
        }
    }
}
?>
