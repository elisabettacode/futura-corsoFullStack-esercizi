<?php

    //Scrivere una pagina web che riceva in input via GET un numero di piano e un numero di stanza, e restituisca il nome dell'ospite in quella stanza.
    // Utilizzare un array multidimensionale che abbia i piani al primo livello e i numeri di stanza al secondo, collegati al nome dell'ospite.

    $registro_clienti = array(

        1 => array(

            101 => "Pippo",
            102 => "Pluto",
            103 => "Paperino",
            104 => "Gastone",
            105 => "Zio Paperone"
        ),

        2 => array(

            201 => "Miss Scarlett",
            202 => "Colonnello Mustard",
            203 => "Professor Plum",
            204 => "Sindaco Green",
            205 => "Chef White"
        ),

        3 => array(

            301 => "Luke Skywalker",
            302 => "Ian Solo",
            303 => "Principessa Leila",
            304 => "Chewbecca",
            305 => "Yoda"
        )
    );

    

    echo '<DOCTYPE!html>' . PHP_EOL;

    echo '<html lang=it>' . PHP_EOL;

    echo '<head>' . PHP_EOL;
    echo '<title>Registro Hotel</title>' . PHP_EOL;
    echo '<meta charset="UTF-8">' . PHP_EOL;
    echo '<link rel="stylesheet" href="style.css">' . PHP_EOL;
    echo '</head>' . PHP_EOL;

    echo '<body>' . PHP_EOL;
    echo '<h1>Registro Hotel</h1>' . PHP_EOL;
    echo '<p>Al piano ' . $_GET["piano"] . ', stanza ' . $_GET["stanza"] . ", alloggia l'ospite: " . $registro_clienti[$_GET["piano"]][$_GET["stanza"]] . '</p>' . PHP_EOL;
    echo '</body>' . PHP_EOL;

    echo '</html>' . PHP_EOL;