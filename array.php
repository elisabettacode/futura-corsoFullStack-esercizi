<?php

    $frutta = array( "banana", "mela", "kiwi", "arancia");  //array ad indicizzazione implicita

    $persona = array(                                       //array associativo
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 30,
        "citta" => "Roma"
    );


    echo '<h1>' . $persona["nome"] . ' ' . $persona["cognome"] . '</h1>' . PHP_EOL;
    echo '<p>' . $persona["nome"] . ' ha ' . $persona["eta"] . ' anni e vive a ' . $persona["citta"] . '</p>' . PHP_EOL;
    echo '<p>A ' . $persona["nome"] . ' piace la frutta, soprattutto la ' . $frutta[1] . '</p>' . PHP_EOL;