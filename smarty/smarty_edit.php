<?php 
    require_once 'vendor\smarty\smarty\libs\Smarty.class.php';
    include 'config.php';
    include 'knihovna.php';

    $smarty = new Smarty();
    $smarty->template_dir = "_tpl";
    $smarty->compile_dir = "tmp";
    $smarty->caching = false;
    $smarty->cache_lifetime = 120;

    $smarty->assign('title', $title);
    $smarty->assign('link', $link);
    $smarty->assign('query', $query);
    $smarty->assign('clanek', [$query]);
         
    
    $smarty->display('edit.tpl');
    

