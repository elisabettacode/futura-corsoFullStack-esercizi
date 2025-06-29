<?php

if((isset($_POST['distanza']) && !empty($_POST['distanza'])) && 
(isset($_POST['velocita']) && !empty($_POST['velocita']))) {

    $distanza = $_POST['distanza'];
    $velocita = $_POST['velocita'];
    
    $risultato = tempo_percorrenza($distanza, $velocita);

    $contenuto = str_replace('{{risultato}}' , $risultato, $contenuto);

};