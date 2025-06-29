<?php

######## Classifica piloti ########

//array ordinato
$lista_class_p = [];

foreach($lista_p as $key => $value){
    $lista_class_p[$value['nome_p']] = [
        'punti_p' => $value['punti']];
}
arsort( $lista_class_p);


//visualizzazione lista
$str_class_p = '<ol>';
foreach($lista_class_p as $key => $value){
    
    $str_class_p .= '<li>' . $key . ' ' . $value['punti_p'] . '</li>';
}

$str_class_p .= '</ol>';

$contenuto = str_replace('{{classifica_piloti}}', $str_class_p, $contenuto );

######## Classifica squadre #######

//calcolo punteggio e array ordinato

$lista_class_sq = [];

foreach ($lista_sq as $key => $value){
    $punteggio_sq = 0;
    
    foreach ($lista_p as $k => $v){
        if($key == $v['squadra']){
            $punteggio_sq += (int) $v['punti'];
        }
    }
    $new_key = $value['nome'];
    $lista_class_sq[$new_key] = [
        'punti_sq' => $punteggio_sq];
}

arsort($lista_class_sq);

//visualizzazione lista

$str_class_sq = '<ol>';
foreach($lista_class_sq as $key => $value){
    
    $str_class_sq .= '<li>' . $key . ' ' . $value['punti_sq']. '</li>';
}

$str_class_sq .= '</ol>';

$contenuto = str_replace('{{classifica_squadre}}', $str_class_sq, $contenuto );