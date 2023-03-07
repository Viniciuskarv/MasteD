<html>
<head>
    <meta charset="UTF=8">
    <title>Exercício 3</title>
</head>
<body>
    <h2>Formulário</h2>
    <form method="post" action="">
        <p>Nome:  <br>
        <input type="text" name="nome"></p>
        <p>Idade: <br>
        <input type="number" name="idade"></p>
        <p>Telemóvel: <br>
        <input type="text" name="tel"></p>
        <p>Horas semanais: <br>
        <input type="number" name="horas"></p>
        <p>Dias da semana: <br>
        <input type="number" name="dias"></p>
        <p>Preço por hora: <br>
        <input type="number" name="preco"></p>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
        if(isset($_POST{'enviar'})){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $tel = $_POST['tel'];
            $horas = $_POST['horas'];
            $dias = $_POST['dias'];
            $preco = $_POST['preco'];

            echo "Nome: $nome.<br>";
            echo "Idade: $idade.<br>";
            echo "Telemóvel: $tel.<br>";
            echo "Horas semanais: $horas.<br>";
            echo "Dias da semana: $dias.<br>";
            echo "Preço por dia: $preco.<br>";

            $semana = ($dias*$horas)*$preco;
            echo "Preço semanal: $semana.";
        }
    ?>
</body>
</html>