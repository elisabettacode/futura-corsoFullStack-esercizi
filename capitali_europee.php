
<?php

    //Scrivere una pagina web che, dato il nome di una capitale europea via GET, restituisca in output il nome dello stato relativo. 
    //Utilizzare un array associativo per archiviare i nomi delle città in coppia con i relativi stati e leggere la città richiesta da $_GET.

    $capitali_europee = array(

        "Roma" => "Italia",
        "Berlino" => "Germania",
        "Bruxelles" => "Belgio",
        "Atene" => "Grecia",
        "Copenaghen" => "Danimarca",
        "Amsterdam" => "Olanda",
        "Dublino" => "Irlanda",
        "Helsinki" => "Finlandia",
        "Parigi" => "Francia",
        "Andorra la Vella" => "Andorra",
        "Bratislava" => "Slovacchia",
        "Lisbona" => "Portogallo",
        "Vienna" => "Austria",
        "Belgrado" => "Serbia",
        "Budapest" => "Ungheria",
        "Kiev" => "Ucraina",
        "Londra" => "Regno Unito",
        "Lubiana" => "Slovenia",
        "Madrid" => "Spagna",
        "Minsk" => "Bielorussia",
        "Praga" => "Repubblica Ceca",
        "Reykjavik" => "Islanda",
        "Stoccolma" => "Svezia",
        "Oslo" => "Norvegia",
        "Berna" => "Svizzera"
    );


    echo '<DOCTYPE!html>' . PHP_EOL;

    echo '<html lang=it>' . PHP_EOL;

    echo '<head>' . PHP_EOL;
    echo '<title>Capitali Europee</title>' . PHP_EOL;
    echo '<meta charset="UTF-8">' . PHP_EOL;
    echo '<link rel="stylesheet" href="style.css">' . PHP_EOL;
    echo '</head>' . PHP_EOL;

    echo '<body>' . PHP_EOL;
    echo '<h1>Capitali Europee</h1>' . PHP_EOL;
    echo '<p>' . $_GET["capitale"] . ' è la capitale di: ' . $capitali_europee[$_GET["capitale"]] . '</p>' . PHP_EOL;
    echo '</body>' . PHP_EOL;

    echo '</html>' . PHP_EOL;