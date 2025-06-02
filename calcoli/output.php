<?php


require_once('lib/funzione_mcm.php');
require_once('lib/funzioni_aree.php');
require_once('index.php');
 switch ($calcolo) {

            case 'cerchio':

                if (isset($_GET['raggio']) && !empty($_GET['raggio']) && $_GET['raggio'] > 0) {
                    $raggio = $_GET['raggio'];
                    $risultato = area_cerchio($raggio);
                }
               
                break;

            case 'triangolo_rettangolo':

                if (
                    (isset($_GET['base']) && !empty($_GET['base']) && $_GET['base'] > 0) &&
                    (isset($_GET['altezza']) && !empty($_GET['altezza']) && $_GET['altezza'] > 0)
                ) {
                    $base = $_GET['base'];
                    $altezza = $_GET['altezza'];
                    $risultato = area_triangolo($base, $altezza);
                }
               
                break;

            case 'rettangolo':

                if (
                    (isset($_GET['a']) && !empty($_GET['a']) && $_GET['a'] > 0) &&
                    (isset($_GET['b']) && !empty($_GET['b']) && $_GET['b'] > 0)
                ) {
                    $a = $_GET['a'];
                    $b = $_GET['b'];
                    $risultato = area_rettangolo($a, $b);
                }
               
                break;

            case 'mcm':

                if (isset($_GET['num1_']) && !empty($_GET['num1_']) && isset($_GET['num2_']) && !empty($_GET['num2_'])) {

                    $num1_ = $_GET['num1_'];
                    $num2_ = $_GET['num2_'];
                    $risultato = calcola_mcm($num1_, $num2_);
                }
               
        }

 if (isset($risultato)) {

        echo "<p>Il risultato  è: " . $risultato . " <p>";
    }

