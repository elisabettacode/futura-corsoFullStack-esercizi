<?php

require_once('lib/overlap.php');

####### Creazione database ########
$dbpath = 'registro.db';
$database = fopen($dbpath, 'a+');
fclose($database);

####### Inizializzazione #########
$lista = [];

$file_content = file_get_contents($dbpath);

if (!empty($file_content) ) {
    $lista = unserialize($file_content);
}

######## Modifica ########
if(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['cognome']) && !empty($_REQUEST['cognome']))
&&(isset($_REQUEST['telefono']) && !empty($_REQUEST['telefono']))
&&(isset($_REQUEST['arrivo']) && !empty($_REQUEST['arrivo']))
&&(isset($_REQUEST['partenza']) && !empty($_REQUEST['partenza']))
&&(isset($_REQUEST['id_prenotazione']) && !empty($_REQUEST['id_prenotazione']))) {

         ######## Controllo overlap ########
        if(overlap_date($lista, $_REQUEST['camera'], $_REQUEST['arrivo'], $_REQUEST['partenza']) == true){

        echo '<p style="font-size:big; color:red;">La camera è già occupata nel periodo selezionato</p>';
               
        }
        ####################################

        $lista[$_REQUEST['id_prenotazione']] = [
                'nome'=>$_REQUEST['nome'],
                'cognome'=>$_REQUEST['cognome'],
                'telefono'=>$_REQUEST['telefono'],
                'camera'=>$_REQUEST['camera'],
                'arrivo'=>$_REQUEST['arrivo'],
                'partenza'=>$_REQUEST['partenza']
        ];
        file_put_contents($dbpath, serialize($lista));
      
}
######## Inserimento #######

elseif(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['cognome']) && !empty($_REQUEST['cognome']))
&&(isset($_REQUEST['telefono']) && !empty($_REQUEST['telefono']))
&&(isset($_REQUEST['arrivo']) && !empty($_REQUEST['arrivo']))
&&(isset($_REQUEST['partenza']) && !empty($_REQUEST['partenza']))) {

        ######## Controllo overlap ########
        if(overlap_date($lista, $_REQUEST['camera'], $_REQUEST['arrivo'], $_REQUEST['partenza']) == true){

        echo '<p style="font-size:big; color:red;">La camera è già occupata nel periodo selezionato</p>';

        }
//scrivi una funzione e ripeti il controllo in inserisci e modifica
        // foreach ($lista as $key => $value){
        //         if ($_REQUEST['camera'] == $value['camera']) {

        //                 $part_rif = strtotime($value['partenza']);
        //                 $arr_rif = strtotime($value['arrivo']);
        //                 $part_nuovo = strtotime($_REQUEST['partenza']);
        //                 $arr_nuovo = strtotime($_REQUEST['arrivo']);

        //                 if(($arr_nuovo < $part_rif) && ($part_nuovo > $arr_rif)) {
        //                         echo '<p style="font-size:big; color:red;">La camera è già occupata nel periodo selezionato</p>';
        //                 }
        //         }   
        // }     
        ###################################                        
                        

        $id_prenotazione = md5('prenotazione-'.microtime(true).rand(0, 1000));
        $lista[$id_prenotazione] = [
                'nome'=>$_REQUEST['nome'],
                'cognome'=>$_REQUEST['cognome'],
                'telefono'=>$_REQUEST['telefono'],
                'camera'=>$_REQUEST['camera'],
                'arrivo'=>$_REQUEST['arrivo'],
                'partenza'=>$_REQUEST['partenza']
                ];
                file_put_contents($dbpath, serialize($lista));
        

        
}

######## Cancellazione ########
elseif (isset($_REQUEST['elimina'])) {
     if (isset($lista[$_REQUEST['elimina']])) {
            unset($lista[$_REQUEST['elimina']]);
            file_put_contents($dbpath, serialize($lista));
}
}
