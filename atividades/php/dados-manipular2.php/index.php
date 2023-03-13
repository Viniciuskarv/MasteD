<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Nome: <input type="text" name="nome"><br>
        Morada: <input type="text" name="morada"><br>
        Idade: <input type="number" name="idade"><br>
        Tem animais de estimação: Se sim, selecione a chekbox. <input type="checkbox" name="animais" id="animaisID"><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
    
        if(isset($_POST{'enviar'})){
            $nome = $_POST['nome'];
            $morada = $_POST['morada'];
            $idade = $_POST['idade'];
            $altera = '';
            if ($_POST['animais'] == 'on'){
                $altera = 'tem';
            }else{
                $altera = 'nao tem';
            }
            echo "Olá bem-vindo/a $nome com morada em $morada, com $idade anos e $altera animais de estimação.";
        }

    ?>
</body>
</html>