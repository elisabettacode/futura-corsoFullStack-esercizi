<?php

function render_pagina($array, $template) {

    $contenuto = file_get_contents($template);

    foreach ($array as $key => $value) {
        $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
    }

    return $contenuto;
};

function render_list($dati, $template) {

    $contenuto_lista = '';

    foreach ($dati as $key => $value) {
        $contenuto_lista .= '<li><a href="' . $value['link'] .'">' . $value['descrizione'] . '</a></li><br>';
    }

    $template = str_replace('{{lista}}', $contenuto_lista, $template);

    return $template;
};