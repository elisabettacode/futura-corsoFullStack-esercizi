<?php

namespace Render;

require_once ('inc/gestione_registro.php');

function render_pagina($array, $template) {

    $contenuto = file_get_contents($template);

    foreach ($array as $key => $value) {
        $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
    }

    return $contenuto;
};

function render_form($dati, $template, $lista_db) {

    $contenuto_form = '<form action="gestione_registro.php" method="post">';

    foreach ($dati as $key => $value) {

        $contenuto_form .= '<input type="' . $value['type'] . '" name="' . $value['name'] . '" placeholder= "' .$value['placeholder'] . '" ' .$value['required'] . 
       ' value="'. (((isset($_REQUEST['modifica']))&&($_REQUEST['modifica'] == 'a'))? $lista_db[$_REQUEST['id_cliente']][$value['name']] : '' ) . '" /><br>';
    }
// isset($dati[$_REQUEST['id_cliente']][$value['name']]
    // if(($_REQUEST['modifica'] == 'a') && (array_key_exists($_REQUEST['id_cliente'], $lista_db))) {
    //     $contenuto_form .= '<input type="hidden" name="id_cliente" value="'. $_REQUEST['id_cliente'] .'"><br>';
    // }
    $contenuto_form .= (((isset($_REQUEST['modifica'])) &&($_REQUEST['modifica'] == 'a') && (array_key_exists($_REQUEST['id_cliente'], $lista_db))) ?
    '<input type="hidden" name="id_cliente" value="'. $_REQUEST['id_cliente'] .'"><br>' : '' );
    $contenuto_form .= '<input type="submit" value="Salva"></form>';
    $template = str_replace('{{elemento}}', $contenuto_form, $template);

    return $template;
};


function render_table ($dati, $template) {

    $str_tabella = '<table>
                         <tr><th>id_cliente</th><th>Nome</th><th>Cognome</th><th>Telefono</th><th>Camera</th></tr>';

    foreach ($dati as $key => $value) {
    
        $str_tabella .= '<tr style="border:1px solid; "><td>' .$key .'<td><td>' . $value['nome'] . '</td><td> ' . $value['cognome'] . '</td>
                        <td>' . $value['telefono'] . '</td><td>' . $value['camera'] .'</td> 
                        <td><a href="gestione.html?modifica=a&id_cliente=' . $key . '">Modifica</a></td>
                        <td><a href="index.php?elimina='. $key .' ">Elimina</a></td></tr>';
    }

    $str_tabella .= '</table>';
    $template = str_replace('{{elemento}}', $str_tabella, $template);

    return $template;
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