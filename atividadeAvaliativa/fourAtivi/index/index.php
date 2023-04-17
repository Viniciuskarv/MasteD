<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background: linear-gradient(0.25turn,#182747, #1023fd);
        }
        .container{
            position: absolute;
            padding: 25px;
            background-color: rgba(255, 255, 255, 0.322);
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
            box-shadow: 2px 2px 10px black
        }
        .container h1,p {
           text-align: center; 
        }
        .containerInter{
            padding: 10px;
            color: black;
        }
        .inputInfo{
            background-color:rgba(255, 255, 255, 0);
            border-radius: 5px;
            color: aliceblue;
        }
        .buttonSignin{
            border-radius: 5px;
            padding: 5px 25px;
            color: azure;
            background-color: rgb(12, 15, 158);
            width: 100%;
        }
        .buttonSignin:hover{
            background-color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <p>Novo no site? <a href="./registro.php">Registre-se</a></p>
        <div class="containerInter">
            <form action="login.php" method="POST">
                <div>
                    <label for="name">Name</label><br>
                    <input name="usuario" name="text" class="inputInfo">
                </div>
                <div>
                    <label for="password">Password</label><br>
                    <input name="senha" class="inputInfo" type="password">
                </div>
                
                <hr>
                <button class="buttonSignin" >Sign in</button>
            </form>    
        </div>
    </div>
</body>
</html>