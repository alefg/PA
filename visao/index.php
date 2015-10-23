<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Projeto PA">
        <meta name="keywords" content="Reciclante">
        <meta name="author" content="Grupo3">

        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <link rel="stylesheet" href="jquery/jquery-ui.css" />
        <script src="jquery/jquery-1.9.1.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script src="js/login.js"></script>

    </head>

    <body id="body">
        <div class="cabecalho" <!--id="container"--> >
             <div id="container">
                <div id="loginContainer">
                    <nav id="menu">
                        <ul>
                            <li><a href="#" ><span>Sobre</span></a></li>
                            <li><a href="#" ><span>Login</span></a></li>
                            <li><a href="#" ><span>Login</span></a></li>
                            <li><a href="#" id="loginButton"><span>Login</span><em></em></a>
                                <div id="loginBox">                      
                                    <form id="loginForm">
                                        <fieldset id="body">
                                            <fieldset>
                                                <label for="email">User</label>
                                                <input type="text" name="email" id="email" />
                                            </fieldset>
                                            <fieldset>
                                                <label for="password">Senha</label>
                                                <input type="password" name="password" id="password" />
                                            </fieldset>
                                            <input type="submit" id="login" value="Entrar" />
                                            <label for="checkbox"><input type="checkbox" id="checkbox" />Lembre-me</label>
                                        </fieldset>
                                        <span><a href="#">Esqueceu sua senha?</a></span>
                                    </form>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>  
            </div>
    </body>   
</html>

