<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invertendo STRING</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>Escreva o texto que deseja inverter: </label>
        <input type="text" name="texto"><br>
        
        <button type="submit">Inverter</button>
    </form>
    <hr>

    <?php
        if(isset($_GET['texto']) && $_GET['texto'] != ""){
            $texto = $_GET['texto'];
            $reverse = [];
            $x = 0;
            $texto_invertido = "";

            for($i = strlen($texto) -1; $i >= 0; $i--){
                $reverse[$x] = $texto[$i];
                $x++;    
            }
            
            foreach($reverse as $value){
                $texto_invertido .= $value;
            }

            echo "<p>Texto digitado: <strong> {$texto} </strong></p>";
            echo "<p>Texto invertido: <strong> {$texto_invertido} </strong> </p>";

        }
    ?>
</body>
</html>