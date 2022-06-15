<?php

function get_categories_h(){
    $CI = get_instance();//instancier l'object depuis la classe CI
    $categories = $CI->Product_model->get_categories();
    return $categories;
}
function get_popular_h(){
    $CI = get_instance();//instancier l'object depuis la classe CI
    $popular = $CI->Product_model->get_popular();
    return $popular;
}

?>
