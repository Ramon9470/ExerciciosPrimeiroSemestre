<?php

$notaum = $_GET ['notaum'];
$notadois = $_GET ['notadois'];
$notatres = $_GET ['notatres'];

$media = ($notaum + $notadois + $notatres) / 2;

if ($media < 3){
    echo 'Primeira nota foi: ' .$media ."Reprovado";

}elseif ($media <= 7 && $media >= 3){
    echo 'Segunda nota foi: ' .$media ."Prova final";

}elseif ($media >= 7){
    echo 'Aprovado'.$media;
}