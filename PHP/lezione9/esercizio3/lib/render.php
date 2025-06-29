<?php

namespace Render;

function render_pagina($array, $template) {

    $contenuto = file_get_contents($template);

    foreach ($array as $key => $value) {
        $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
    }

    return $contenuto;
}

function render_menu ($dati, $template) {

    $menu = '<ul>';

    foreach ($dati as $k => $v) {
        $menu .= '<li><a href="' . $k . '.html">' .$v['contenuto']['title'] .'</a></li>';
    }
    $menu .= '</ul>';
    $template = str_replace('{{menu}}', $menu, $template);

    return $template;
}