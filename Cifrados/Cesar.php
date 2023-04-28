<?php

//El cifrado César es un algorítmo basado en la transposición de caracteres, es
// decir, el intercambio de unas letras por otras. Cuando se especifica este cifrado, se debe enviar
// el mensaje a cifrar así como el valor de trasposición. De esta forma, cada letra del mensaje se
// desplaza tantas posiciones como se indique en el desplazamiento.

class Cesar{

    //Array que contiene las letras del alfabeto, no incluye la Ñ
    private $arr=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    

    public function cifrarMensaje($mensaje){ //Se toma como parametro el mensaje a cifrar
        $mensaje=strtoupper($mensaje); //Lo convierte en mayusculas para asegurarse que todas las letras estan en el mismo formato
        $tamano=strlen($mensaje); //Calcula el numero de caracteres del mensaje

        $resultado=""; //Variable resultado se inicializa como una cadena vacia

        for($i=0;$i<$tamano;$i++){ //Recorre el mensaje caracter por caracter
           
            $char=$mensaje[$i];

            if(ctype_alpha($char)){ //Si la letra es una letra del alfabeto ejecuta el codigo dentro del if si no lo es se agrega directamente al resultado sin cifrarla
                $index=array_search($char,$this->arr); //Se busca su indice en el array $arr
                $new=($index+2); //Se calcula el nuevo indice de la letra
                $letra=$this->arr[$new]; //se obtiene la letra correspondiente del arreglo $arr.

                $resultado.=$letra; //se agrega la letra cifrada al resultado
            }
        }
        return $resultado; //devuelve el resultado cifrdo despues de iterar a través de todas las letras en el mensaje original
    }

}



?>