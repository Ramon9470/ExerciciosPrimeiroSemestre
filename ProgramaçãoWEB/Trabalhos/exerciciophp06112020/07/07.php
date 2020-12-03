?php
    $metros = $_GET['metros'];

    $litros = $metros / 6;
    $sit = $litros / 18;
    $valor_sit = $sit * 80;

    $sit2 = $litros / 3.6;
    $val_sit2 = $sit2 * 25;

    echo 'Metros recebido: '.$metros, 'm²';
    echo '<br>';
    echo 'Quantidades de 18 Litros: ', number_format($sit, 2, '.', ',');
    echo '<br>';
    echo 'Valor: R$', number_format($val_sit, 2, '.', ',');
    echo '<br>';
    echo 'Quantidade de 3,6 Litros: ', number_format($sit2, 2, '.', ',');
    echo '<br>';
    echo 'Valor: R$', number_format($val_sit2, 2, '.', ',');

?>