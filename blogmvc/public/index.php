<?php 
 include('../app/autoloader.php');

$url = ($_GET['url'])??'';

if($url == 'blog' ){
    // 2: cree l'objet 
    $ctrl = new BlogController;
}elseif($url == 'contact' ){
    $ctrl =  new ContactController;
}elseif($url == 'about' ){
    $ctrl = new AboutController;
}else{
    $ctrl = new AccueilController;
}

// 3: on affiche
$ctrl->index();

$query=$pdo->prepare('SELECT * FROM articles');
$query->execute([1]);






// include_once('../controllers/Controller.php');
// $url = ($_GET['url'])??'';

// if($url == 'blog' ){
//     // 1: inclu le fichier  
//     include_once('../controllers/BlogController.php');
//     // 2: cree l'objet 
//     $ctrl = new BlogController;
// }elseif($url == 'contact' ){
//     include_once('../controllers/ContactController.php');
//     $ctrl =  new ContactController;
// }elseif($url == 'about' ){
//     include_once('../controllers/AboutController.php');
//     $ctrl = new AboutController;
// }else{
//     include_once('../controllers/AccueilController.php');
//     $ctrl = new AccueilController;
// }

// // 3: on affiche
// $ctrl->index();


?>







