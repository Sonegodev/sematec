<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(45deg, white, black);
            }

            div{
                background-color: rgb(0, 0, 0);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 60px;
                border-radius: 15px;
                color: white; 
            }

            input{
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }

            button{
                background-color:dodgerblue;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
                cursor:pointer;
            }

            button:hover{
                background-color:deepskyblue;

            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <div class="Info">
                <h1>Login</h1>
                <input type="email" id="email" name="email" placeholder="Email">
                <br>
                <br>
                <input type="password" id="senha" name="email" placeholder="Senha">
                <br>
                <br>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </body>
</html>