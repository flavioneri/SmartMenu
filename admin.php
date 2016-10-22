<?php
    //no caso de ter a sessao aberta redireciona automaticamente qdo clicamos no bonequinho
   session_start();
    if(isset($_SESSION['login_user'])){
        header("location: administracao.php");
    }
?>


<html data-ng-app="menuApp">
<head>
	<title>SmartMenu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes">
  

    <!--Favicon para todas as plataformas-->
    <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
    <link rel="manifest" href="icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


	<link data-require="bootstrap@*" data-semver="4.0.0-alpha.2" rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" />
    <script data-require="jquery@*" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 
    <script data-require="bootstrap@*" data-semver="4.0.0-alpha.2" src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    <script data-require="angular.js@*" data-semver="2.0.0" src="https://code.angularjs.org/2.0.0-snapshot/angular2.js"></script>
    <script data-require="angular-route@*" data-semver="1.5.8" src="https://code.angularjs.org/1.5.8/angular-route.js"></script>
    <script data-require="jquery@*" data-semver="3.0.0" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
	<script src="http://bootstrapdocs.com/v3.1.1/docs/dist/js/bootstrap.min.js"></script>
	<script src="http://rawgit.com/obogo/angular-focus-manager/master/build/angular-focusmanager.js"></script>
    <!--<script src= "angular.min.js"></script>-->
    <script src= "script.js"></script>		
</head>

<body data-ng-controller="menuController">

    <div class="container">

                <a href="index.html" style="text-decoration: none"><h1><span class="glyphicon glyphicon-cutlery" href="index.html" style="text-decoration: none"></span>SmartMenu</h1></a>

            <div class="container" style="text-align: center; margin-top: 20%;">

                <form action="autenticacao.php" method="post">
                <label class="grey" for="username">Username:</label>
                <input class="field" type="text" name="username" id="username" value="" size="23" /><br><br>
                <label class="grey" for="pass">Password:</label>
                <input class="field" type="password" name="pass" id="pass" size="23" /><br><br>
                <input type="submit" name="submit" value="Entrar" class="bt_register" style="border-radius: 10%" />
                </form>

            </div>

    </div>



    </body>
    </html>