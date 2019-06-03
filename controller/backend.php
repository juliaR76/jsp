<?php

function admin()
{
    ob_start();
    require('view/admin.php');
    $content = ob_get_clean(); 
    require('template_Back.php');
}