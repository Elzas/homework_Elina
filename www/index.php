<?

session_start();
$all_url = explode('?', $_SERVER['REQUEST_URI']);
$url = explode('/', $all_url[0]);
define('BASE', 'http://'.$_SERVER['HTTP_HOST']);

if (empty($url[1])) {
    $url[1] = 'home';
}

require 'model/db.php';
$DB = connect_to_db();

if (file_exists('controller/' . $url[1] . '.php')) {
    
    $gtpl = 'main';
    require 'controller/' . $url[1] . '.php';
    require 'view/'.$gtpl.'.php';
    
} else {
    echo 'ERROR - File not found!!!';
}
?>