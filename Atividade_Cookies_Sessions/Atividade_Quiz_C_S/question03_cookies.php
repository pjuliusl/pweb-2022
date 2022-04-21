<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pergunta 3</title>
</head>
<body>
    <?php
        setcookie("question2", $_POST["question2"]);
    ?>
    <section class="main-quiz">
        <h2 class="main-title">Pergunta 3</h2>
        <h3 class="main-tile -change">Em que ano foi criada a linguagem C?</h3>
        <form action="question04_cookies.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="question3" value="1971C">Em 1971<br>
            <input type="radio" name="question3" value="1981C">Em 1981<br>
            <input type="radio" name="question3" value="1980C">Em 1980<br>
            <input type="radio" name="question3" value="1972C">Em 1972<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="img/imagem3.jpg" width="384" height="216">
    </section>
<script>
    function validaForm(){
        var radios = document.getElementsByName("question3");
        var formValido = false;

        var i = 0;
        while (!formValido && i < radios.length) {
            if(radios[i].checked) formValido = true;
            i++;        
        }

        if (!formValido) alert("Escolha uma alternativa");
        return formValido;
    }
</script>    
</body>
</html>