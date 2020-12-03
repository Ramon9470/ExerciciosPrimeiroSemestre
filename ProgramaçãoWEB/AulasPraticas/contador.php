$contador = 1;

while ($contador <= 6){
    
    echo '<H$contador> Olá Mundo! </H$contador>\n';

    $contador ++;
}

$contador = 0;

while ($contador < 20){

    $contador ++;

    if ($contador == 5 || $contador == 10 || $contador == 15){

        continue;
    }

    echo 'contador = $contador <br>';
}