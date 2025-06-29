<?php
####### Creazione database ########
$dbpath_sq = './registro_squadre.db';
$database_sq = fopen($dbpath_sq, 'a+');
fclose($database_sq);

####### Inizializzazione #########
$lista_sq = [];

$file_content_sq = file_get_contents($dbpath_sq);

if (!empty($file_content_sq) ) {
    $lista_sq = unserialize($file_content_sq);
}

######## Modifica ########
if(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['id_sq']) && !empty($_REQUEST['id_sq']))) {

        $lista_sq[$_REQUEST['id_sq']] = [
                'nome' => $_REQUEST['nome']
        ];
        file_put_contents($dbpath_sq, serialize($lista_sq));
      
}
######## Inserimento #######
elseif(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {

        $id_sq = md5('squadra-'.microtime(true).rand(0, 1000));
        $lista_sq[$id_sq] = [
                'nome' => $_REQUEST['nome']
        ];
        file_put_contents($dbpath_sq, serialize($lista_sq));

}

######## Cancellazione ########
elseif (isset($_REQUEST['elimina'])) {
     if (isset($lista_sq[$_REQUEST['elimina']])) {
            unset($lista_sq[$_REQUEST['elimina']]);
            file_put_contents($dbpath_sq, serialize($lista_sq));
}
}
