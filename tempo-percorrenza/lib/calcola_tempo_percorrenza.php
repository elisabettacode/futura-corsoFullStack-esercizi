<?php


function tempo_percorrenza ($distanza, $velocita) {      #v = s/t 

      $tempo = $distanza / $velocita;  # media oraria

      $ore = (int) $tempo;
      $min = ($tempo - $ore) * 60;
      $time_string = $ore . ' ore e ' . round($min) . ' minuti';

      return $time_string;
}

