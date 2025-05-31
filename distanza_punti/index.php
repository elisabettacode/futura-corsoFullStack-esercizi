<?php

#Scrivere un programma che consenta di calcolare la distanza fra due punti su un piano cartesiano, formato da due pagine; 
#la prima deve chiedere all'utente la posizione dei due punti coinvolti, la seconda deve effettuare il calcolo e presentare il risultato.
# Utilizzare l'approccio a template con coppie di file PHP e HTML.


$pagina = array (
    'Title' => 'Distanza fra due punti',
    'h1'=> 'Calcola la distanza fra due punti',
    'Contenuto' => 'Calcoliamo la distanza fra due punti A e B su un piano cartesiano.<br>Inserisci le coordinate x,y dei due punti e clicca su Calcola per visualizzare il risultato.'
);


$form = array (
    'Ax' => array (
        'lable'=> 'Coordinata x di A:',
        'type'=> 'text',
        'name'=> 'Ax'
    ),
    'Ay' => array (
        'lable'=> 'Coordinata y di A:',
        'type'=> 'text',
        'name'=> 'Ay'
    ),
    'Bx' => array (
        'lable'=> 'Coordinata x di B:',
        'type'=> 'text',
        'name'=> 'Bx'
    ),
    'By' => array (
        'lable'=> 'Coordinata y di B:',
        'type'=> 'text',
        'name'=> 'By'
    )
     );


$contenuto = file_get_contents('index.html');

#sostituisco i placeholders con i valori dell'array $pagina

foreach ($pagina as $key => $value) {
    $contenuto = str_replace('{{' .$key.'}}', $value, $contenuto);
};

#scrivo il form con gli elementi dell'array $form

$contenuto_form = '';

foreach ($form as $key => $value) {
    $contenuto_form .= '<label for="' . $key . '" >' . $value['lable'] . '</label><br>
    <input type="' . $value['type'] . '" id="' . $key . '" name="' . $key . '" /><br>';
};

$contenuto = str_replace('{{Form}}', $contenuto_form, $contenuto);

echo $contenuto;