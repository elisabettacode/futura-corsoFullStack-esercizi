<?php

function render_pagina($array, $template) {

    $contenuto = file_get_contents($template);

    foreach ($array as $key => $value) {
        $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
    }

    return $contenuto;
};


function get_piatti_by_tipo($piatti, $tipo) {

    $risultato = [];
    $i = 0;
    foreach ($piatti as $key => $value) {
        
        if($value['tipo'] == $tipo){
            $risultato[$i] = $value;
            $i++;
        }

    }

    return $risultato;
}

// $elenco_primi = get_piatti_by_tipo($piatti, 'primo');
// foreach ($elenco_primi as $key => $value)
// $elenco_secondi = get_piatti_by_tipo($piatti, 'secondo');
// $elenco_dolci = get_piatti_by_tipo($piatti, 'dolce');


function render_select ($etichette, $elenco, $contenuto ) {

    foreach ($etichette as $key => $value) {

        $elenco_piatti = get_piatti_by_tipo($elenco, $value['tipo']);

        $select_elenco = '<label for="' . $value['tipo'] . '">' .$value['etichetta'].'</label><br> 
                <select id="' . $value['tipo'] .'" name="' . $value['tipo'] . '">{{OpzioniSelect}}</select><br>';
    
        $opzione = '';
        $select = '';

        foreach ($elenco_piatti as $key => $value) {

            $opzione .= '<option value="' . $key . '">' . $value['nome'] . '</option>';
        }

        $select_elenco = str_replace('{{OpzioniSelect}}', $opzione, $select);
        $select .= $select_elenco;
    }

    return $select;
};


