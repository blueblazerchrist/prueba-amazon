<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        body {
            font-family: "Amazon Ember", Arial, sans-serif;
        }
        .az-logo {
            width: 100%;
            display: flex;
            justify-content: center;
            zoom: 1;
            margin-bottom: 10px;
        }
        .az-container {
            width: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-content: center;
            height: 100vh;
            flex-wrap: wrap;

        }
        .az-create-account-container {
            width: 330px;
            border: 2px solid #e4e4e4;
            border-radius: 5px;
            padding: 20px;
        }
        .az-form {
            width: 100%;
            display: flex;
            justify-content: start;
            flex-wrap: wrap;
        }
        .az-form h1 {
            font-weight: 400;
            font-size: 28px;
            line-height: 1.2;
        }
        .form-group {
            width: 100%;
            margin: 7px 0 7px 0;
        }
        .w-100,.form-group label,.form-group input, .form-group span{
            width: 100%;
        }
        .form-group label{
            font-weight: 700;
            font-size: 13px;
        }
        .form-group input {
            display: block;
            width: calc(100% - 14px);
            padding: 7px;
            border-radius: 5px;
            margin: 5px 0 5px 0;
            border: 2px solid #e4e4e4;
        }
        .form-group span {
            font-size: 13px;
        }
        .form-group span i {
            color: #3a81be;
            margin-right: 5px;
            font-weight: 700;
            cursor: pointer
        }
        .az-container-btn {
            width: 100%;
            margin: 10px 0 10px 0;
        }
        .az-btn {
            width: 100%;
            padding: 7px;
            background: rgb(241,196,84);
            background: linear-gradient(0deg, rgba(241,196,84,1) 11%, rgba(254,229,186,1) 100%);
            border: 1px solid #e4e4e4;
            border-radius: 5px;
        }
        .linea-rara {
            margin-top: 10px;
            width: 100%;
            height: 44px;
            margin-bottom: -18px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, .14), rgba(0, 0, 0, .03) 3px, transparent);
            z-index: 0;
            box-sizing: border-box;
        }
        .linea-rara::after {
            width: 100%;
            display: block;
            height: 44px;
            background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0), #fff);
            z-index: 1;
            content: "";
        }
        .az-term-and-cond, .az-login {
            font-size: 13px;
            z-index: 2;
        }
        .play {
            font-size: 10px;
        }
    </style>
</head>
<body>
    <div class="az-container">
        <div class="az-logo w-100">
            <img src="{{ asset('/icon-amazon.png') }}">
        </div>
        <div class="az-create-account-container">
            <div class="az-form">
                <h1>Crear Cuenta</h1>
                <div class="form-group">
                    <label>Tu nombre</label>
                    <input type="text" name="name" id="">
{{--                    <span>--}}
{{--                        <i>i</i>La contraseña debe contener al menos seis caracteres.--}}
{{--                    </span>--}}
                </div>
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input type="email" name="email" id="">
{{--                    <span>--}}
{{--                        <i>i</i>La contraseña debe contener al menos seis caracteres.--}}
{{--                    </span>--}}
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Debe tener al menos 6 caracteres" id="">
                    <span>
                        <i>i</i>La contraseña debe contener al menos seis caracteres.
                    </span>
                </div>
                <div class="form-group">
                    <label>Vuelve a escribir la contraseña</label>
                    <input type="password" name="password" id="">
{{--                    <span>--}}
{{--                        <i>i</i>La contraseña debe contener al menos seis caracteres.--}}
{{--                    </span>--}}
                </div>
                <div class="az-container-btn">
                    <button class="az-btn" >Crear tu cuenta de amazon</button>
                </div>
                <div class="az-term-and-cond">
                    Al crear una cuenta, aceptas las <span style="color: #3a81be; cursor: pointer">Condiciones de Uso</span> y el <span style="color: #3a81be; cursor: pointer">Aviso de Privacidad</span> de Amazon.
                </div>
                <span class="linea-rara"></span>
                <div class="az-login">
                    ¿Ya tienes una cuenta? <span style="color: #3a81be; cursor: pointer">Iniciar sesión <small class="play">▶</small></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>