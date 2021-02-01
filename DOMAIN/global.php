<?php

function anteInject($string){

    $caracter = array(
        '[' , 
        ']', 
        ')', 
        '(', 
        '{', 
        '}', 
        ',', 
        ';', 
        '?', 
        '#', 
        '%', 
        '$', 
        '*', 
        '=', 
        '-', 
        '_',
        '+',
        ':',
        '¨',
        '!',
        '/',
        '\"'
    );

    $string = str_replace($caracter, "", $string);
    $string = str_replace('"', "", $string);
    $string = str_replace("'", "", $string);

    return $string;
}
?>