<?php

    $contatti_clienti = array (

        101 => array(
            "nome" => "Pippo",
            "telefono" => "347867"
        ),

        102 => array(
            "nome" => "Pluto",
            "telefono" => "345782"
        ),

        103 => array(
            "nome" => "Paperino",
            "telefono" => "7765987"
        ),

        104 => array(
            "nome" => "Gastone",
            "telefono" => "653899"
        ),

        105 => array(
            "nome" => "Zio Paperone",
            "telefono" => "887367"
        ),

        201 => array(
            "nome" => "Miss Scarlett",
            "telefono" => "776473"
        ),

        202 => array(
            "nome" => "Colonnello Mustard",
            "telefono" => "773466"
        ),

        203 => array(
            "nome" => "Professor Plum",
            "telefono" => "123811"
        ),

        204 => array(
            "nome" => "Sindaco Green",
            "telefono" => "129867"
        ),

        205 => array(
            "nome" => "Chef White",
            "telefono" => "982376"
        ),

        301 => array(
            "nome" => "Luke Skywalker",
            "telefono" => "776339"
        ),

        302 => array(
            "nome" => "Ian Solo",
            "telefono" => "987556"
        ),

        303 => array(
            "nome" => "Principessa Leila",
            "telefono" => "903720"
        ),

        304 => array(
            "nome" => "Chewbecca",
            "telefono" => "873366"
        ),

        305 => array(
            "nome" => "Maestro Yoda",
            "telefono" => "usa la Forza"
        )
        );

        $num_stanza = $_POST['id'];

        if( strlen($num_stanza) != 0 ) {
            echo '<pre>';
            echo '<p>Nella stanza numero ' . $num_stanza . ' alloggia ' . $contatti_clienti[$num_stanza]["nome"] . '.</p>';
            echo '<p>Per chiamare digita: ' . $contatti_clienti[$num_stanza]["telefono"] . '</p>';
            echo '</pre>';

        } else {

            foreach($contatti_clienti as $key=>$value) {
                echo '<pre>';
                echo '<p>Stanza: ' . $key . ' Cliente: ' . $value["nome"] . ' Telefono: ' . $value["telefono"] . '</p>';
                echo '<br>';
                echo '</pre>';
            } 
        };


        //perchè impostando la condizione isset() anche se ho il campo vuoto mi restituisce true e non esegue dalla 109 ?
        // se la condizione è $_POST['id']!= NULL funziona!

        if( isset($_POST['id']) ) {
            echo '<pre>';
            echo '<p>Nella stanza numero ' . $_POST['id'] . ' alloggia ' . $contatti_clienti[$_POST['id']]["nome"] . '.</p>';
            echo '<p>Per chiamare digita: ' . $contatti_clienti[$_POST['id']]["telefono"] . '</p>';
            echo '</pre>';

        } else {

            foreach($contatti_clienti as $key=>$value) {
                echo '<pre>';
                echo '<p>Stanza: ' . $key . ' Cliente: ' . $value["nome"] . ' Telefono: ' . $value["telefono"] . '</p>';
                echo '<br>';
                echo '</pre>';
            } 
        };
