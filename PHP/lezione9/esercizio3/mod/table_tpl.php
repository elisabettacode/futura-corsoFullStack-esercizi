<?php

########## Creazione tabella visualizzazione dati #########
$str_table = '';
foreach ($lista_sq as $key => $value){
    $str_table .= '<table>
        <tr><td colspan="3"><strong>' . $value['nome'] . '</strong></td>
        <td><a href="gestione.html?modifica=b&id_sq=' . $key . '">Modifica</a></td>
        <td><a href="index.php?elimina='. $key .' ">Elimina</a></td></tr>
        <tr><th>Id_pilota</th><th>Nome</th><th>Punti</th><th>Modifica</th><th>Elimina</th></tr>';
    
    foreach ($lista_p as $k => $v){
        if($key == $v['squadra']){
            $str_table .= '<tr><td>' . $k . '</td><td>' . $v['nome_p'] . '</td><td>' . $v['punti'] . '</td>
            <td><a href="gestione.html?modifica=a&id_p=' . $k . '">Modifica</a></td>
            <td><a href="index.php?elimina='. $k .' ">Elimina</a></td></tr>';
        }
    }
    $str_table .= '</table><br>';
}
$contenuto = str_replace('{{elemento}}', $str_table, $contenuto);
