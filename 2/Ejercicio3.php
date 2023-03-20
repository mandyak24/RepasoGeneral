<?php
$ar1 = array(4,12,-5,8,13,-9,0,3); 
$ar2 = array(1,-2,3,-6,4,12,-7,-8);


//FUNCIONES
//Primera funcion calcularMedia()
function calcularMedia($ar){ //$ar es el argumento
     $media = array_sum($ar)/count($ar);
     return $media;
 
}
//Segunda función ordenar($ar,$media)
function ordenar($ar,$media){
    $contador=0;
    $contador2=0;

    for ($i=0; $i <count($ar) ; $i++) { 
        if($ar[$i]>$media){
            $contador++;

        }
    }
    for($i=0;$i<count($ar);++$i){
        if($ar[$i]>$media){
            $contador2++;

            if($contador2!==$contador){
                echo $ar[$i].':';
            }else{
                echo $ar[$i];
            }
        }
    }
}



//LLAMADAS
$media1=calcularMedia($ar1);
echo "Media 1= " .$media1. '<br>';
echo '<br>'.$ordenar1=ordenar($ar1,$media1);

$media2=calcularMedia($ar2);
echo "Media 2=".$media2 .'<br>';
echo '<br>'.$ordenar2=ordenar($ar2,$media2);

?>
