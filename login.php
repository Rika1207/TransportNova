<!DOCTYPE html>
<html>
<head>
    <title>Nova Trans</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="Jquery.Mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="themes/tema.css">
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css">
    <link rel="stylesheet" href="Jquery.Mobile/jquery.mobile.structure-1.4.5.css">
    <script src="Jquery.Mobile/jquery.js"></script>
    <script src="Jquery.Mobile/themes/theme.min.css"></script>
    <script src="Jquery.Mobile/jquery.mobile-1.4.5.js"></script>
</head>
<body>
    <div data-role="page" id="page1" data-theme="a">
        <div data-role="header">
            
            <h1><img src="Jquery.Mobile/images/logo7.png" alt=""></h1>
            <a href="login.php" data-icon=star>Ingresar</a>
            <a href="index.php" data-icon=star>Inicio</a>

            <nav data-role="navbar">
                <ul>
                    <li><a href="#page2" data-icon="star"> Acerca de</a></li>
                    <li><a href="#page2" data-icon="check"> Buscar Rutas</a></li>
                    <li><a href="#" data-icon="location"> Registrarse</a></li>
                    <li><a href="#" data-icon="phone"> Contactos</a></li>
                </ul>
                
            </nav>
        </div>

        <form action="registro1.php" method="POST" class="registro">
            <div data-role="main">

            <input type="text" placeholder="Ingrese Usuario" name="usu"/>
            <input type="password" placeholder="Ingrese Contraseña" name="pass"/>
            <input type="submit" value="INGRESAR" name="entrar" onclick="window.location.href='validar.php'" />
            <input type="button" value="Registrarse" onclick="window.location.href='registro.php'">

            
            </div>
        </form>

        <div data-role="footer">
            
        </div>
        
    </div>

    <div data-role="page" id="page2" data-theme="a">
        <div data-role="header">
            <h1>Esta es la Pagina 2</h1>
            <p></p>
        </div>

        <div data-role="main">
            
        </div>

        <div data-role="footer">
            
        </div>
        
    </div>

</body>
</html>