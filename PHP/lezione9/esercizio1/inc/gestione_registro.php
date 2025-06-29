<?php
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
&&(isset($_REQUEST['id_cliente']) && !empty($_REQUEST['id_cliente']))) {

        $lista[$_REQUEST['id_cliente']] = [
                'nome'=>$_REQUEST['nome'],
                'cognome'=>$_REQUEST['cognome'],
                'telefono'=>$_REQUEST['telefono'],
                'camera'=>$_REQUEST['camera']
        ];
        file_put_contents($dbpath, serialize($lista));
      
}
######## Inserimento #######
elseif(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['cognome']) && !empty($_REQUEST['cognome']))) {

        $id_cliente = md5('clienti-'.microtime(true).rand(0, 1000));
        $lista[$id_cliente] = [
                'nome'=>$_REQUEST['nome'],
                'cognome'=>$_REQUEST['cognome'],
                'telefono'=>$_REQUEST['telefono'],
                'camera'=>$_REQUEST['camera']
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
