<?php

    $faturamento = ["SP" => 67836.43, "RJ" => 36678.66, "MG" => 29229.88, "ES" => 27165.48, "Outros" => 19849.53];
    $total = 0;

    foreach($faturamento as $value){
        $total += $value;
    }

    foreach($faturamento as $key => $value){
        
        $percentual = ($value / $total) * 100;

        echo "<p>Estado : <strong> {$key} </strong> </p>";
        echo "<p>Faturamento: <strong> R\$ ". number_format($value, 2,',', '.') ."</strong> </p>";
        echo "<p>Percentual: <strong>". number_format($percentual,2,',') ."%</strong> </p>";   
        echo "<hr>";
    }

    echo "Total de faturamento: <strong> R\$ ".number_format($total,2, ',', '.')."</strong>";
