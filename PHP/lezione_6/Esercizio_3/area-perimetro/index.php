<?php

#Scrivere un programma che chieda all'utente di scegliere una figura geometrica fra cerchio, triangolo e rettangolo, 
#dopodiché in base alla figura scelta chieda di inserire i dati, infine proponga una scelta fra calcolo dell'area e 
#calcolo del perimetro. Un ultimo file deve presentare il risultato del calcolo. Utilizzare i template HTML, 
#una libreria per il rendering e una libreria per i calcoli.


require_once('lib/render.php');

$pagina = array(

        'title' => 'Area e perimetro',
        'h1' => 'Scegli la figura geometrica',
        'contenuto' => 'Seleziona la figura geometrica fra quelle proposte.<br>Clicca su scegli per proseguire.'

);

$figure = array ( 

    1 => 'cerchio' ,
    2 => 'rettangolo',
    3 => 'triangolo rettangolo'
);

$contenuto = file_get_contents('tpl/index.html');

$contenuto = render_pagina($pagina, $contenuto);
$contenuto = render_select('{{select}}', $figure, $contenuto);

echo $contenuto;


