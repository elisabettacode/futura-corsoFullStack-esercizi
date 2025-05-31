<?php


#Dati 2 punti A e B con coordinate Ax, Ay e Bx, By devo calcolare la distanza

function calcola_distanza ($Ax, $Ay, $Bx, $By) {
    $a = abs($Ax - $Bx);
    $b = abs($Ay - $By);
    
    return hypot($a, $b);

};

$pagina = array (
    'Title' => 'Distanza fra due punti',
    'h1'=> 'Risultato'
);

$output = file_get_contents('output.html');

#sostituisco i placeholders con i valori dell'array $pagina

foreach ($pagina as $key => $value) {
    $output = str_replace('{{' .$key.'}}', $value, $output);
};


if (isset($_GET['Ax']) && !empty($_GET['Ax']) && 
    isset($_GET['Ay']) && !empty($_GET['Ay']) && 
    isset($_GET['Bx']) && !empty($_GET['Bx']) && 
    isset($_GET['By']) && !empty($_GET['By'])) {

        $Ax = ($_GET['Ax']);
        $Ay = ($_GET['Ay']);
        $Bx = ($_GET['Bx']);
        $By = ($_GET['By']);

        $distanza = round(calcola_distanza($Ax, $Ay, $Bx, $By), 2);


        echo $output . '<p>La distanza tra i due punti A e B è: ' . $distanza . '</p>';

    } else {

        echo $output . '<p>I valori inseriti sono non validi o incompleti</p>';
    };



