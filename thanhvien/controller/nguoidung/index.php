<?php

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $action = '';
    }
    switch($action)
    {
        case 'index':
            {
            require_once('../view/index.php');
                break;
    }
    }
?>