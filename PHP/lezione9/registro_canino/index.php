<?php
####### Creazione database ########
$dbpath = 'registro.db';
$database = fopen($dbpath, 'a+');
fclose($database);

####### Inizializzazione #########
$lista = [];
$str_tabella= '';
$str_nome= '';
$str_anno= '';
$str_id= '';
$file_content = file_get_contents($dbpath);

if (!empty($file_content) ) {
    $lista = unserialize($file_content);
}

######## Modifica ########
if(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['anno']) && !empty($_REQUEST['anno']))
&&(isset($_REQUEST['id']) && !empty($_REQUEST['id']))) {

        $lista[$_REQUEST['id']] = ['nome'=>$_REQUEST['nome'],
                'anno'=>$_REQUEST['anno']];
        file_put_contents($dbpath, serialize($lista));
      
}
######## Inserimento #######
elseif(isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])
&&(isset($_REQUEST['anno']) && !empty($_REQUEST['anno']))) {

        $id = md5('registro-'.microtime(true).rand(0, 1000));
        $lista[$id] = ['nome'=>$_REQUEST['nome'],
                        'anno'=>$_REQUEST['anno']];
        file_put_contents($dbpath, serialize($lista));

}

######## Cancellazione ########
elseif (isset($_REQUEST['elimina'])) {
     if (isset($lista[$_REQUEST['elimina']])) {
            unset($lista[$_REQUEST['elimina']]);
            file_put_contents($dbpath, serialize($lista));
}
}

######## Visualizzazione dati #########
foreach ($lista as $key => $value) {
    
        $str_tabella .= '<tr style="border:1px solid; "><td>' .$key .'<td><td>' . $value['nome'] . '</td><td> ' . $value['anno'] . '</td>
                        <td><a href="index.php?modifica=a&id=' . $key . '">Modifica</a></td>
                        <td><a href="index.php?elimina='. $key .' ">Elimina</a></td></tr>';
}

########## Renderizzazione pagina #############
$contenuto = file_get_contents('template.html');
$contenuto = str_replace('{{tabella}}', $str_tabella, $contenuto);

if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])
&& (isset($_REQUEST['modifica']) && ($_REQUEST['modifica'] == 'a'))){

   $str_nome= 'value="' . $lista[$_REQUEST['id']]['nome'] .'"';
   $str_anno= 'value="' . $lista[$_REQUEST['id']]['anno'] .'"';
   $str_id='<input type="hidden" name="id" value="' . $_REQUEST['id'] . '">';
}

$contenuto = str_replace('{{value-nome}}', $str_nome, $contenuto);
$contenuto = str_replace('{{value-anno}}', $str_anno, $contenuto);
$contenuto = str_replace('{{id}}', $str_id, $contenuto); 
echo $contenuto;