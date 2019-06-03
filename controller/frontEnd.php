<?php


function home()
{
    ob_start();
    require('view/home.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
    
}

function infos()
{
    ob_start();
    require('view/infos.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}

function contact()
{
    ob_start();
    require('view/contact.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}

function connexion()
{
    ob_start();
    require('view/connexion.php');
    $content = ob_get_clean(); 
    require('template_Front.php');
}