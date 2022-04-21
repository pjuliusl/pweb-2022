<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Respostas</title>
</head>
<body>
    <?php
        setcookie("question5", $_POST["question5"]);
        $rightQuestions = 0;

        if($_COOKIE["question1"] == "1995js"){
            $rightQuestions++;
            $result01 = "Acertou";
        } else {
            $result01 = "Errou";
        }
        if($_COOKIE["question2"] == "1991py"){
            $rightQuestions++;
            $result02 = "Acertou";
        } else {
            $result02 = "Errou";
        }
        if($_COOKIE["question3"] == "1972C"){
            $rightQuestions++;
            $result03 = "Acertou";
        } else {
            $result03 = "Errou";
        }
        if($_COOKIE["question4"] == "1975M"){
            $rightQuestions++;
            $result04 = "Acertou";
        } else {
            $result04 = "Errou";
        }
        if($_COOKIE["question5"] == "alanturing"){
            $rightQuestions++;
            $result05 = "Acertou";
        } else {
            $result05 = "Errou";
        }


        if($rightQuestions == 0){
            $finalizacao = "<h1>Você errou todas, não está sabendo o suficiente :( </h1>";
        } elseif($rightQuestions == 1){
            $finalizacao = "<h1>Você está no caminho, acertou uma questão! :/</h1>";
        } elseif($rightQuestions == 2){
            $finalizacao = "<h1>Que esperto! Acertou 2 questões. :)</h1>";
        } elseif($rightQuestions == 3){
            $finalizacao = "<h1>É você, Einstein? Acertou 3 questões! :D</h1>";
        } elseif($rightQuestions == 4){
            $finalizacao = "<h1>Você não é desse planeta! Acertou 4 questões!:p</h1>";
        } else {
            $finalizacao = "<h1>Aparentemente um Deus está entre nós! Parabéns acertou 5 questões! :DD</h1>";
        }

        $nota = "<h2>Sua nota: ".$rightQuestions."/5</h2>";
    ?>
    <section class="main-section">
        <h1>Sinta-se á vontade para realizar o quiz novamente.</h1>
        <ul>
            <li id="selec"><a href="index.html">Quiz - Cookies</a></li>
            <li><a href="indexsessions.html">Quiz - Sessions</a></li>
        </ul>
    </section>

    
    <section class="main-quiz">
        <?php echo $finalizacao;?>
        <table>
            <tr>
                <th>Pergunta</th>
                <th>Alternativa correta</th>
                <th>Veredito</th>
            </tr>
            <tr>
                <td>Em que ano foi criada a linguagem JavaScript?</td>
                <td>Em 1995.</td>
                <td><?php echo $result01;?></td>
            </tr>
            <tr>
                <td>Em que ano foi criada a linguagem python?</td>
                <td>Em 1991.</td>
                <td><?php echo $result02;?></td>
            </tr>
            <tr>
                <td>Em que ano foi criada a linguagem C?</td>
                <td>Em 1972.</td>
                <td><?php echo $result03;?></td>
            </tr>
            <tr>
                <td>Qual o ano de criação da Microsoft?</td>
                <td>Em 1975</td>
                <td><?php echo $result04;?></td>
            </tr>
            <tr>
                <td>Quem foi o pai da computação?</td>
                <td>Alan Turing</td>
                <td><?php echo $result05;?></td>
            </tr>
        </table>
        <br>
        <?php echo $nota;?>
        <br>
    </section>
</body>
</html>