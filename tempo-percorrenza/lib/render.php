<?php

function render_pagina($array, $template) {

    foreach ($array as $key => $value) {
        $template = str_replace('{{' .$key.'}}', $value, $template);
    }

    return $template;
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