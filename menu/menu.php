<?php

    $piatti = array (

        'spaghetti' => array (

            'nome' => 'Spaghetti Cacio e Pepe',
            'ingredienti' => array ('Pecorino Romano', 'Pepe'),
            'prezzo' => 8
        ),

        'risotto' => array (

            'nome' => 'Risotto ai Funghi Porcini',
            'ingredienti' => array ('Porcini', 'Cipolla','Parmigiano', 'Burro','Pepe'),
            'prezzo' => 10
        ),

        'tortelloni' => array (

            'nome' => 'Tortelloni burro e salvia',
            'ingredienti' => array ("Pasta all'uovo", 'Ricotta', 'Prezzemolo', 'Parmigiano', 'Burro','Salvia'),
            'prezzo' => 10
         ),

         'cotoletta' => array (

            'nome' => 'Cotoletta',
            'ingredienti' => array ('Cotoletta', 'Patate al forno'),
            'prezzo' => 10
         ),

         'polpette' => array (

            'nome' => 'Polpette al sugo',
            'ingredienti' => array('Polpette', 'Sugo di pomodoro'),
            'prezzo' => 9
         ),

         'arrosto' => array (

            'nome' => 'Arrosto',
            'ingredienti' => array ('Arrosto', 'Patate al forno'),
            'prezzo' => 12
         )

    );


    $primo = $_GET['primo'];

    $secondo = $_GET['secondo'];

    //trasformo l'array 'ingredienti' nidificato in un array semplice per poi convertirlo in una stringa

    $primo_ingredienti =  $piatti[$primo]['ingredienti'];

    $secondo_ingredienti = $piatti[$secondo]['ingredienti'];

    $totale = $piatti[$primo]['prezzo'] + $piatti[$secondo]['prezzo'];


    echo '<pre>'. PHP_EOL;
    echo '<h1>Il tuo ordine:</h1>'. PHP_EOL;
    echo '<p><strong>' . $piatti[$primo]['nome'] . '</strong> Ingredienti: ' . implode(', ', $primo_ingredienti) . ' <b>' . $piatti[$primo]['prezzo'] . ' €</b> </p>' . PHP_EOL; 
    echo '<p><strong>' . $piatti[$secondo]['nome'] . '</strong> Ingredienti: ' . implode( ', ', $secondo_ingredienti) . ' <b>' . $piatti[$secondo]['prezzo'] . ' €</b> </p>' . PHP_EOL;
    echo '<p>Il <b>totale</b> del tuo ordine è: <b>' . $totale . ' €</b></p>' . PHP_EOL;
    echo '</pre>' . PHP_EOL;


    //oppure uso un ciclo per elencare gli igredienti (2 versioni)

    echo '<pre>'. PHP_EOL;
    echo '<h1>Il tuo ordine:</h1>'. PHP_EOL;
    echo '<p><strong>' . $piatti[$primo]['nome'] . '</strong> Ingredienti: ' ;
    
    foreach ($primo_ingredienti as $primo_ingrediente) {
        echo $primo_ingrediente . ', ';
    } ;

    echo ' <b>' . $piatti[$primo]['prezzo'] . ' €</b> </p>' . PHP_EOL;
    echo '<p><strong>' . $piatti[$secondo]['nome'] . '</strong> Ingredienti: ' ; 

    foreach ($piatti[$secondo]['ingredienti'] as $secondo_ingrediente) {
        echo $secondo_ingrediente . ', ';
    } ;

    echo ' <b>' . $piatti[$secondo]['prezzo'] . ' €</b> </p>' . PHP_EOL;
    echo '<p>Il <b>totale</b> del tuo ordine è: <b>' . $totale . ' €</b></p>' . PHP_EOL;
    echo '</pre>' . PHP_EOL;
