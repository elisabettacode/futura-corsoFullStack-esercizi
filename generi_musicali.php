<?php

    $genere_musicale = array("pop", "rock", "classica", "jazz", "indi italiana", "indi folk", "neomelodica", "trap", "rap");

    $persona = array(

        "nome" => "Elisabetta",
        "cognome" => "C",
        "eta" => 42,
        "citta" => "Bologna"
    );


    echo '<DOCTYPE!html>' . PHP_EOL;

    echo '<html lang=it>' . PHP_EOL;

    echo '<head>' . PHP_EOL;
    echo '<title>Gusti Musicali</title>' . PHP_EOL;
    echo '<meta charset="UTF-8">' . PHP_EOL;
    echo '<link rel="stylesheet" href="style.css">' . PHP_EOL;
    echo '</head>' . PHP_EOL;

    echo '<body>' . PHP_EOL;
    echo '<h1>Gusti Musicali</h1>' . PHP_EOL;
    echo '<p>Ciao, mi chiamo ' . $persona["nome"] . ' ' . $persona["cognome"] . '. , ho ' . $persona["eta"] . ' anni e ho sempre vissuto a ' . $persona["citta"] . '.</p>' . PHP_EOL;
    echo '<p>Ascolto molti diversi generi musicali, ma non sopporto la musica ' . $genere_musicale[6] . '.</p>'. PHP_EOL;
    echo '</body>' . PHP_EOL;

    echo '</html>' . PHP_EOL;

   
    