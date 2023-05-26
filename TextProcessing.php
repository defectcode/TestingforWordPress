<?php
function modify_content($content) {
    $search = array('А', 'Е', 'Я', 'О');
    $replace = array('ААА', 'ЕЕЕ', 'ЯЯЯ', 'ООО');
    $modified_content = str_replace($search, $replace, $content);
    return $modified_content;
}

add_filter('the_content', 'modify_content');