<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>  
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: lightgray;
        }
    .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        @media (max-width : 670px) {
            .box{
                width: 50%;
        }
    }

    @media (max-width : 973px) {
            .box{
                width: 40%;
        }
    }

    .box a{
            color: white;
            text-decoration: none;
            background-color:gray;

        }
        .box a:hover{
            color: darkorange;
        }
        fieldset{
            border: 3px solid orange;
        }
        legend{
            border: 1px solid darkorange;
            padding: 10px;
            text-align: center;
            background-color: orange;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: darkorange;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,orange, darkorange);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(246, 225, 39), rgb(255, 156, 51));
        }
    </style>
</head>
<body>
<a href="index.html">Voltar</a>

    <div class="box">
    <form action="testeLogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <br>
        

        <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
        <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <a href="cadastro.php">Cadastre-se</a>  
            </fieldset>
       

        </form>
    </div>
    
</body>
</html>

