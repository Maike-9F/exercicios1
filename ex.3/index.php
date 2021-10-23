<?php

    $json_file = file_get_contents("dados.json"); 
    $dados = json_decode($json_file, true); //Converter JSON para Array
    $dia_lucro = 0;
    $total = 0;
    $menor_fatu = $dados[0]["valor"];
    $maior_fatu = $dados[0]["valor"];
    $acima_media = 0;

    for($i = 0; $i < count($dados); $i++){
        if($dados[$i]["valor"] != 0){ 
            
            $dia_lucro++; 
            $total += $dados[$i]["valor"]; 

            if($dados[$i]["valor"] < $menor_fatu){
                $menor_fatu = $dados[$i]["valor"]; 
            }

            if($dados[$i]["valor"] > $maior_fatu){
                $maior_fatu = $dados[$i]["valor"]; 
            }       

        }
    }
    $media = $total / $dia_lucro;
    
    //Verifica os dias em que os valores foram acima da media e soma
    for($i = 0; $i < count($dados); $i++){ 
        if($dados[$i]["valor"] != 0){

            if($dados[$i]["valor"] >= $media){
                $acima_media++;
            }
        }
    }

    echo "Menor valor de faturamento ocorrido em um dia do mês: <strong> {$menor_fatu} </strong> <hr>";
    echo "Maior valor de faturamento ocorrido em um dia do mês: <strong> {$maior_fatu} </strong> <hr>";
    echo "Média de faturamento do mês: <strong> {$media} </strong> <hr>";
    echo "Número de dias no mês em que o valor de faturamento diário foi superior à média mensal: <strong> {$acima_media} </strong> <hr>";