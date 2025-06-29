<?php

$tipologie = array(

    0 => array (
        'etichetta' => 'Primo:', 
        'tipo' => 'primo'
    ),

    1 => array (
        'etichetta' => 'Secondo:', 
        'tipo' => 'secondo'
    ),

    2 => array (
        'etichetta' => 'Dolce:', 
        'tipo' => 'dolce'
    )
);


$piatti = array (

    'spaghetti' => array (
        'tipo' => 'primo',
        'nome' => 'Spaghetti Cacio e Pepe',
        'ingredienti' => array ('Pecorino Romano', 'Pepe'),
        'prezzo' => 8
    ),

    'risotto' => array (
        'tipo' => 'primo',
        'nome' => 'Risotto ai Funghi Porcini',
        'ingredienti' => array ('Porcini', 'Cipolla','Parmigiano', 'Burro','Pepe'),
        'prezzo' => 10
     ),

    'tortelloni' => array (
        'tipo' => 'primo',
        'nome' => 'Tortelloni burro e salvia',
        'ingredienti' => array ("Pasta all'uovo", 'Ricotta', 'Prezzemolo', 'Parmigiano', 'Burro','Salvia'),
        'prezzo' => 10
    ),
        
    'cotoletta' => array (
        'tipo' => 'secondo',
        'nome' => 'Cotoletta',
        'ingredienti' => array ('Cotoletta', 'Patate al forno'),
        'prezzo' => 10
    ),

    'polpette' => array (
        'tipo' => 'secondo',
        'nome' => 'Polpette al sugo',
        'ingredienti' => array('Polpette', 'Sugo di pomodoro'),
        'prezzo' => 9
    ),

    'arrosto' => array (
        'tipo' => 'secondo',
        'nome' => 'Arrosto',
        'ingredienti' => array ('Arrosto', 'Patate al forno'),
        'prezzo' => 12
    ),

    'cannolo' => array (
        'tipo' => 'dolce',
        'nome' => 'Cannolo Siciliano',
        'ingredienti' => array ('Ricotta', 'Zucchero', 'Cioccolato', 'Pistacchio'),
        'prezzo' => 6
    ),

    'tiramisu' => array (
        'tipo' => 'dolce',
        'nome' => 'Tiramisù',
        'ingredienti' => array ('Mascarpone', 'Uova', 'Zucchero', 'Savoiardi', 'Caffè', 'Cioccolato'),
        'prezzo' => 6
    ),

    'tenerina' => array (
        'tipo' => 'dolce',
        'nome' => 'Tenerina e Mascarpone',
        'ingredienti' => array ('Cioccolato', 'Zucchero', 'Uova', 'Farina', 'Mascarpone'),
        'prezzo' => 6
    ),
);