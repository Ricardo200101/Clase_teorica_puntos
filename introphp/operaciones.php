<?php
    // evaluar si se esta enviado algo

    if(isset($_POST["Enviar"])){

         //Declaracion de variable. 
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2']; 
    $ope = strtolower($_POST['ope']); 

    //Operaciones a realizar
    $operaciones = array("suma", "resta", "multiplicacion", "division");
    
    //Evaluar si la operacion no existe en el array $ope
    if(!in_array($ope, $operaciones)){
        echo "La operacion no es validad";
        exit(); 
    }

    //Realizar la operacion 
    switch($ope){
        case "suma":
            $resu = $num1 + $num2;
            break;

        case "resta":
            $resu = $num1 - $num2;
            break; 
        
            case "multiplicacion":
                $resu = $num1 * $num2;
                break; 

                case "division":

                    if($num2 ==0){
                        echo "NO SE PUEDE DIVIDIR POR CERO";
                        exit();
                    }
                    $resu = $num1 / $num2;
                    break; 
    }

    //Muestra en pantalla
    echo "El resultado de la $ope de $num1 y $num2 es: $resu"; 
    }
   

?>