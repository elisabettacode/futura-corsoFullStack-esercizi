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

        $contenuto_form .= '<label for="' . $value['name1'] . '" >' . $value['lable'] . '</label><br>
        <input type="' . $value['type'] . '" id="' . $value['name1'] . '" name="' . $value['name1'] . '" placeholder="' . $value['placeholder1'] . '" />
        <input type="' . $value['type'] . '" id="' . $value['name2'] . '" name="' . $value['name2'] . '" placeholder="' . $value['placeholder2'] . '"/><br>';
    };

    $template = str_replace('{{form}}', $contenuto_form, $template);

    return $template;
};