<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Relogio</title>
</head>
<body>
    <?php
    include_once ('index.php')
    ?>
    <form action="autotime.php" method="post">
        <h1 id="titulo">Relógio e Data</h1>
    <fieldset class="campo">
        <div class="caixa">
            <label for="data"style="font-size:15px;">Informe um </label>
            <label for="data"style="font-size:15px;">dia da week:</label>
            <input type="number" name="data" id="data">
        </div>
        <div class="caixa">
            <label for="hora"style="font-size:larger;">Informe o Horario:</label>
            <input type="number" name="hora" id="hora" >
        </div>
        <button type="submit" id="botao">
            ver
        </button>

    </fieldset>
</form>
</body>




</html>
