<?php
$hexColor = $_POST['color'];
print_r ($hexColor);
echo '<br><br>';

if ($hexColor[0] == "#") { 
    $hexColor = substr($hexColor, 1, 6);
}

try{
    if($hexColor == NULL){
        throw new Exception('ERROR');
    }
}catch(Exception $e){
    echo 'ERROR: NO SE HA INTRODUCIDO NINGÚN VALOR. 
        VUELVA A LA PÁGINA DE INICIO E INTÉNTELO DE NUEVO';
    die();
}

for($i = 0; $i <= 3; $i++){
    if($i == 1){
        $value = substr($hexColor, 0, 2);
        $number = hexdec($value);
        echo 'El valor hexadecimal es: '  .$value. ' y su valor rgb es: ' .$number. '<br>';
    }else if($i == 2){
        $value = substr($hexColor, 2, 2);
        $number = hexdec($value);
        echo 'El valor hexadecimal es: '  .$value. ' y su valor rgb es: ' .$number. '<br>';
    }else if($i == 3){
        $value = substr($hexColor, 4, 2);
        $number = hexdec($value);
        echo 'El valor hexadecimal es: '  .$value. ' y su valor rgb es: ' .$number. '<br>';
    }
}
?>
