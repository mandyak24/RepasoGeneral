<?php

/* Cifrado Vignére. Este método de cifrado se basa también en la transposición de caractéres  pero, en esta ocasión, empleando una tabla (matríz) para el cáiculo.
Este cifrado emplea una palabra maestra o clave para el cifrado del mensaje. Dicha palabra debe ser del mismo tamaño o más corta que el mensaje a enviar.
Si el tamaño de la clave es menor que el tamaño del mensaje, aquel se repetirá hasta que ambos tamaños coincidan.
Para el cifrado del mensaje, se debe tomar cada una de las letras y aplicar el siguiente algorítmo:
• Se toma la letra del mensaje y se busca en la fila
• Se toma la misma letra de la clave y se busca en la columna
• Se sustituye la letra del mensaje original por la que coincida en la tabla.

Descifrado: Se opera de la forma inversa. Se busca la primera letra del mensaje cifrado 
en la columna y se avanza sobre esa fila hasta la primera letra de la clave de cifrado 
para obtener el mensaje original. Se procede asi hasta descifrar todo el mensaje */

class Vignere{

    private $tabla;

    public function __construct(){
        $this->tabla=array();

        for ($i=0; $i <26 ; $i++) { 
            $fila=array();
            for ($j=0; $j< 26; $j++) { 
                $fila[]=chr((($i + $j)%26)+65);
            }
            $this->tabla[]=$fila;
        }
    }

    public function cifrarMensaje($mensaje,$clave){
        $mensaje=strtoupper($mensaje);
        $clave=strtoupper($clave);
        $tamano_mensaje=strlen($mensaje);
        $tamano_clave=strlen($clave);
        $resultado="";

        //Repetir la clave si es necesario
        if($tamano_clave<$tamano_mensaje){
            $tamano_repeticion=ceil($tamano_mensaje/$tamano_clave);
            $clave_repetida=str_repeat($clave,$tamano_repeticion);
            $clave_repetida=substr($clave_repetida,0,$tamano_mensaje);
        }else{
            $clave_repetida=$clave;
        }
        //Cifrado de Vigenere
        for ($i=0; $i <$tamano_mensaje; $i++) { 
            
            $char_mensaje=$mensaje[$i];
            $char_clave=$clave_repetida[$i];

            if(ctype_alpha($char_mensaje)){
                $fila=array_search($char_clave,range('A','Z'));
                $columna=array_search($char_mensaje,range('A','Z'));
                $letra=$this->tabla[$fila][$columna];
                $resultado.=$letra;
             }else{
                $resultado.=$char_mensaje;
            }
         }
        return $resultado;
     }

}
