<!DOCTYPE html>
<html>
<head>
    <title>Reloj Espejo PHP</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="box">
    <h2>Reloj Espejo</h2>

    <form method="post">
        <input type="number" name="hora" placeholder="Hora (1-12)" required>
        <input type="number" name="min" placeholder="Minutos (0-59)" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if($_POST){
        $hora = $_POST["hora"];
        $min = $_POST["min"];

        if($min == 0){
            $hora_real = 12 - $hora;
            $min_real = 0;
        }else{
            $hora_real = 11 - $hora;
            $min_real = 60 - $min;
        }

        if($hora_real <= 0){
            $hora_real += 12;
        }

        echo "<h3>Hora Real: "
            . str_pad($hora_real,2,"0",STR_PAD_LEFT)
            . ":"
            . str_pad($min_real,2,"0",STR_PAD_LEFT)
            . "</h3>";
    }
    ?>
</div>

</body>
</html>