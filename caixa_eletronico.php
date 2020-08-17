<?php 
    function caixaEletronico($entrada){
        $retorno = array(
            200 => 0,
            100 => 0,
            50 => 0,
            20 => 0,
            10 => 0,
            5 => 0,
            2 => 0,       
        );

        $sobra = $entrada;

        if(!is_int($entrada) || ($entrada < 1) || ($entrada > 10000)){
            return "Informe um valor inteiro entre R$1,00 e R$10.000.";
        }

        if($entrada > 1){
            foreach ($retorno as $nota => $value) {
                if($sobra >= $nota){
                    
                    if($nota == 5 && $sobra < 10){
                        if(($sobra % 2) != 0){
                            $retorno[$nota] = 1;
                            $sobra -= $nota;
                            continue;
                        }else{
                            //Utilizar nota de 2 para pares menores que 10
                            continue;
                        }
                    }
                    //Caso for ímpar, considerar outro cálculo
                    if(($sobra % 2) != 0 && $sobra != 3){
                        $retorno[$nota] = intdiv($sobra, $nota) - 1;
                        $sobra = $sobra - ($nota * ($retorno[$nota]));
                    }else{
                        $retorno[$nota] = intdiv($sobra, $nota);
                        $sobra = $sobra % $nota;
                    }

                    if($sobra == 1){
                        return "Não conseguimos te devolver este valor. Insira outro e tente novamente.";
                    }
                }
            }
        }else{
            return "Não conseguimos te devolver este valor. Insira outro e tente novamente.";
        }

        return $msg = "Notas entregues: "
                . $retorno[200] . " notas de R$200,00, ". $retorno[100] . " notas de R$100,00, "
                . $retorno[50] . " notas de R$50,00, ". $retorno[20] . " notas de R$20,00, "
                . $retorno[10] . " notas de R$10,00, ". $retorno[5] ." notas de R$5,00 e "
                . $retorno[2] . " notas de R$2,00.";
    }
    
    



