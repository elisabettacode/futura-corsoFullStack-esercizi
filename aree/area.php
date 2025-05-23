<?php

    require_once("funzioni_aree.php");



    $raggio = $_GET['raggio'];

    $a = $_GET['a'];

    $b = $_GET['b'];

    if ($_GET['figura'] == 'cerchio') {
        echo "<p>L'area del tuo cerchio è: " . round(area_cerchio($raggio), 2) . "</p>";

    } elseif ( $_GET['figura'] == 'triangolo') {
        echo "<p>L'area del tuo triangolo è: " . round(area_triangolo($a, $b), 2) . "</p>";

    } elseif ($_GET['figura'] == 'rettangolo') {
        echo "<p>L'area del tuo rettangolo è: " . round(area_rettangolo($a, $b), 2) . "</p>";
    }

