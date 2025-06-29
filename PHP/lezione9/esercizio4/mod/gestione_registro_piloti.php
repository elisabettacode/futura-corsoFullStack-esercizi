<?php
####### Creazione database ########
$dbpath_p = './registro_piloti.db';
$database_p = fopen($dbpath_p, 'a+');
fclose($database_p);

####### Inizializzazione #########
$lista_p = [];

$file_content_p = file_get_contents($dbpath_p);

if (!empty($file_content_p) ) {
    $lista_p = unserialize($file_content_p);
}

######## Modifica ########
if(isset($_REQUEST['nome_p']) && !empty($_REQUEST['nome_p'])
&&(isset($_REQUEST['punti']) && !empty($_REQUEST['punti']))
&&(isset($_REQUEST['squadra']) && !empty($_REQUEST['squadra']))
&&(isset($_REQUEST['id_p']) && !empty($_REQUEST['id_p']))) {

        $lista_p[$_REQUEST['id_p']] = [
                'nome_p'=>$_REQUEST['nome_p'],
                'punti'=>$_REQUEST['punti'],
                'squadra'=>$_REQUEST['squadra']
                ];
        file_put_contents($dbpath_p, serialize($lista_p));
      
}
######## Inserimento #######
elseif(isset($_REQUEST['nome_p']) && !empty($_REQUEST['nome_p'])
&&(isset($_REQUEST['punti']) && !empty($_REQUEST['punti']))) {

        $id_p = md5('pilota-'.microtime(true).rand(0, 1000));
        $lista_p[$id_p] = [
                'nome_p'=>$_REQUEST['nome_p'],
                'punti'=>$_REQUEST['punti'],
                'squadra'=>$_REQUEST['squadra']
                ];
        file_put_contents($dbpath_p, serialize($lista_p));

}

######## Cancellazione ########
elseif (isset($_REQUEST['elimina'])) {
     if (isset($lista_p[$_REQUEST['elimina']])) {
            unset($lista_p[$_REQUEST['elimina']]);
            file_put_contents($dbpath_p, serialize($lista_p));
}
}
