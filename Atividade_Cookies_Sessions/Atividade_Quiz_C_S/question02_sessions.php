<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pergunta 2</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["question1"] = $_POST["question1"];
    ?>
    <section class="main-quiz">
        <h2 class="main-title">Pergunta 2</h2>
        <h3 class="main-title -change">Em que ano foi criada a linguagem python?</h3>
        <form action="question03_cookies.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="question2" value="1895py">Em 1895<br>
            <input type="radio" name="question2" value="1991py">Em 1991<br>
            <input type="radio" name="question2" value="1897py">Em 1897<br>
            <input type="radio" name="question2" value="1996py">Em 1996<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="img/imagem2.jpg"  width="384" height="216">
    </section>
<script>
    function validaForm(){
        var radios = document.getElementsByName("question2");
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