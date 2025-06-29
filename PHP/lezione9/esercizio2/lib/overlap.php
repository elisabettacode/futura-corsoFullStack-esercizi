<?php

       ######## Controllo overlap ########
//scrivi una funzione e ripeti il controllo in inserisci e modifica
function overlap_date ($array, $input_camera, $input_arrivo, $input_partenza){
    foreach ($array as $key => $value){
        if ($input_camera == $value['camera']) {

            $part_rif = strtotime($value['partenza']);
            $arr_rif = strtotime($value['arrivo']);
            $part_nuovo = strtotime($input_partenza);
            $arr_nuovo = strtotime($input_arrivo);

            if(($arr_nuovo < $part_rif) && ($part_nuovo > $arr_rif)) {
                return true; 
            } else {
                return false;
            }
        }   
    }
}     
        ###################################      