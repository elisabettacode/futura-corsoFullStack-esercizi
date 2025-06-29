<?php

function render_pagina($array, $template) {

    $contenuto = file_get_contents($template);

    foreach ($array as $key => $value) {
        $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
    }

    return $contenuto;
};

function render_form($dati, $template) {

    $contenuto_form = '';

    foreach ($dati as $key => $value) {

        $contenuto_form .= '<label for="' . $key . '" >' . $value['lable'] . '</label><br>
    <input type="' . $value['type'] . '" id="' . $key . '" name="' . $key . '" /><br>';
    };

    $template = str_replace('{{form}}', $contenuto_form, $template);

    return $template;
};