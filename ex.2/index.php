<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <form action="index.php" method="get">
        <h3>FIBONACCI</h3>
        <label for="num">Informe o número que deseja verificar se pertence a sequência de Fibonacci</label>
        <br>
        <input type="number" name="num" id="num">

        <button type="submit">Verificar</button>
    </form>
    <br>

    <?php
        if(isset($_GET['num']) && $_GET['num'] != ""){

            $fibonacci = array(0, 1);
            $num = $_GET['num'];
            $x = 0;
            $y = 1;
            $calc = 0;
            echo "Valor informado: <strong> {$num} </strong> <hr>";
            echo "SEQUÊNCIA: ";
            echo "$fibonacci[$x]". ", ";
            echo "$fibonacci[$y]". ", ";

            while(true){

                $calc = $fibonacci[$x] + $fibonacci[$y];
                array_push($fibonacci, $calc);
                
                if($calc <= $num){
                   echo "{$fibonacci[$y+1]}". ", "; 
                }
                
                $x = $y;
                $y = $y + 1;

                if($calc >= $num){
                echo "<hr>";
                    if($calc == $num){
                        echo "O Valor <strong>{$num}</strong> pertence a sequência Fibonacci";
                    } else{
                        echo "O Valor <strong>{$num}</strong> NÃO pertence a sequência Fibonacci";
                    }

                echo "<hr>";
                break;
                } 
            } 

        }
    ?>

</body>
</html>