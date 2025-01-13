<?php 
include_once('../controllers/AcceuilController.php');
include_once('../controllers/BlogController.php');
include_once('../controllers/AboutController.php');
include_once('../controllers/ContactController.php');



$acceuil = new AcceuilController;
$blog = new BlogController;
$about = new AboutController;
$contact = new ContactController;


if(isset($_GET['url']) && $_GET['url'] == 'blog' ){
    echo $blog->index();
}elseif(isset($_GET['url']) && $_GET['url'] == 'contact' ){
    echo $contact->index();
}elseif(isset($_GET['url']) && $_GET['url'] == 'about' ){
    echo $about->index();
    // 1: inclu le fichier  
    // 2: cree l'objet 
}else{
    echo $acceuil->index();
}

// 3: $ctrl->index();


// <?php 


// if(isset($_GET['url']) && $_GET['url'] == 'blog' ){
//     // 1: inclu le fichier  
//     include_once('../controllers/BlogController.php');
//     // 2: cree l'objet 
//     $ctrl = new BlogController;
// }elseif(isset($_GET['url']) && $_GET['url'] == 'contact' ){
//     include_once('../controllers/ContactController.php');
//     $ctrl = 
// }elseif(isset($_GET['url']) && $_GET['url'] == 'about' ){
//     include_once('../controllers/AboutController.php');
//     $ctrl = new AboutController;
// }else{
//     include_once('../controllers/AcceuilController.php');
//     $ctrl = new AcceuilController;
// }

// // 3: on affiche
// $ctrl->index();

// $url = ($_GET['page'])??'';

// ?>








?>