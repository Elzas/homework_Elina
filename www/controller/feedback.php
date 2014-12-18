<?

$active = 'feedback';

$tpl = 'feedback';

if(!empty($_POST)){
    
    if(!empty($_SESSION['cap']) && $_SESSION['cap']==$_POST['cap']){
        echo 'ok';
    }else{
        echo 'error!';
    }
    
}