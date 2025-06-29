<?php

// require_once('inc/dati.php');
// require_once('gestione_registro_squadre.php');
// require_once('gestione_registro_piloti.php');


####### Creazione form squadre #######

$str_form_sq = '<form action="gestione_registro_squadre.php" method="post">';

foreach ($form_sq as $key => $value) {

    $str_form_sq .= '<input type="' . $value['type'] . '" name="' . $value['name'] . '" placeholder= "' .$value['placeholder'] . '" ' .$value['required'] . 
    ' value="'. (((isset($_REQUEST['modifica']))&&($_REQUEST['modifica'] == 'b'))? $lista_sq[$_REQUEST['id_sq']][$value['name']] : '' ) . '" /><br>';
}

$str_form_sq .= (((isset($_REQUEST['modifica'])) &&($_REQUEST['modifica'] == 'b') && (array_key_exists($_REQUEST['id_sq'], $lista_sq))) ?
'<input type="hidden" name="id_sq" value="'. $_REQUEST['id_sq'] .'"><br>' : '' );
$str_form_sq .= '<input type="submit" value="Salva"></form>';

######## Creazione form piloti ########

$str_form_p = '<form action="gestione_registro_piloti.php" method="post">';

foreach ($form_p as $key => $value) {

    $str_form_p .= '<input type="' . $value['type'] . '" name="' . $value['name'] . '" placeholder= "' .$value['placeholder'] . '" ' .$value['required'] . 
    ' value="'. (((isset($_REQUEST['modifica']))&&($_REQUEST['modifica'] == 'a'))? $lista_p[$_REQUEST['id_p']][$value['name']] : '' ) . '" /><br>';
}

$str_form_p .= (((isset($_REQUEST['modifica'])) &&($_REQUEST['modifica'] == 'a') && (array_key_exists($_REQUEST['id_p'], $lista_p))) ?
'<input type="hidden" name="id_p" value="'. $_REQUEST['id_p'] .'"><br>' : '' );

        ###### Creazione select squadre nel form piloti ######

//lettura db squadre

$str_sel = '<select name = "squadra">';

foreach ($lista_sq as $key => $value) {

    $str_sel .= '<option value="' . $key . '">'. $value['nome'] .'</option>';
}
$str_sel .= '</select><br>';

        ######### ### ########

$contenuto_form = $str_form_sq . $str_form_p . $str_sel .'<input type="submit" value="Salva"></form>';

$contenuto = str_replace('{{elemento}}', $contenuto_form, $contenuto);



