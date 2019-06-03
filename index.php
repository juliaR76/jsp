<?php

require('controller/frontEnd.php');
require('controller/backend.php');

if(empty($_SERVER['QUERY_STRING']))
{
    
    home();
}else{
    if(isset($_GET['action']))
    {
        if($_GET['action'] == 'home')
        {  
                home();
            
        }
        elseif($_GET['action'] == 'infos')
        {  
                infos();
            
        }
        elseif($_GET['action'] == 'contact')
        {  
                contact();
            
        }
        elseif($_GET['action'] == 'connexion')
        {  
                connexion(); 
        }
        elseif($_GET['action'] == 'admin')
        {
                admin();
        }
    }
}



