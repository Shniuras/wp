<?php
/*
Plugin Name: Dekoratorius
Description: Everyword 'Labas' in text will be change into word 'Krabas'
Version: 0.1.0
Author: Seimur
*/

add_filter('the_content','change');
function change ($content){
    $content = str_replace('Labas', 'Krabas',$content);
        return $content;
}

add_filter('the_content','changas');
function changas ($content){
    $bad = ['nachuj','pochuj'];
    $content = str_replace($bad, '****', $content);
    return $content;
}