<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*Separate the function. just like javascript*/
/*Function. get URL file name (name.php)*/
/*Compare the name with the function parameter*/
/*If same, add active class to nav bar*/

function setActive($UrlParameterActive)
{
    $current_filename = basename($_SERVER['REQUEST_URI'], ".php");
    /*$_SERVER['REQUEST_URI'] = The URI given to access the page; e.g., '/index.html'*/
    /*basename() = remove suffix*/
    
    if ($current_filename == $UrlParameterActive)
    {
        echo 'class= "active"';
    }
}


?> <!--End tag because it is a function on its own-->