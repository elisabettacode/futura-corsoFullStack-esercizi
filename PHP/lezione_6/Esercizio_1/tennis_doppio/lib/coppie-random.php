<?php

#mi complico la vita cercando di scrivere una funzione generica per generare coppie random partendo da n elementi
#devo controllare che il numero di elementi sia pari
#devo controllare di avere almeno due coppie
#devo creare un array rimescolato con random()
#devo creare degli array $coppia che contengono due elementi ciclando sull'array casuale
#devo poter scrivere le coppie generate

function genera_coppie_random ($array) {

    if ((count($array)%2 == 0) && (count($array) >= 4)) {
         
        $array_rimescolato = $array;
        shuffle($array_rimescolato);
        
        $coppie = [];
        $id = 0;

        for ($i = 0; $i < count($array_rimescolato)/2; $i++) {
            $coppie[$i] = [ $array_rimescolato[$id], $array_rimescolato[$id + 1]];
            $id += 2;
        }

        return $coppie;

    } else {

        echo '<p>Non ci sono abbastanza elementi per formare le coppie</p>';
    }

}

#semplificando con 4 elementi, una volta ottenuto un array rimescolato, posso semplicemente stampare 
#una coppia con i primi due elementi e una con gli altri due senza ricavare un array di coppie come sopra
