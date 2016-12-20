<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        header("location: index.html");
    }


?>


<!DOCTYPE html>

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
    <script src= "script.js"></script>		
</head>

<body data-ng-controller="menuController" data-ng-init="displayDataEntradas()">

    <div class="container" >
        <div class="row">
            <div class="col-xs-12">

            <a href="index.html" style="text-decoration: none"><h1><span class="glyphicon glyphicon-cutlery" href="index.html" style="text-decoration: none"></span>SmartMenu</h1></a>


            <button name="show_entradas"  ng-click="displayDataEntradas()" class="btn btn-primary">Entradas</button>
            <button name="show_sopas"  ng-click="displayDataSopas()" class="btn btn-primary">Sopas</button>
            <button name="show_pratos"  ng-click="displayDataPP()" class="btn btn-primary" >Pratos</button>
            <button name="show_sobremesas"  ng-click="displayDataSobremesas()" class="btn btn-primary" >Sobremesas</button>
            <button name="adicionar_prato" class="btn btn-primary" data-toggle="modal" data-target="#modal1" style="float: right;">Adicionar</button>

            <br><br>

            <div class="form-group">
                   <input type="text" class="form-control" id="search" placeholder="Pesquisar" data-ng-model="search"/>
            </div>

            <table id="myTable" class="table table-striped table-hover">
                     <tr>
                        <th>Nome</th>
                        <th></th>
                     </tr>
                        <tr data-ng-repeat= "item in pratos | filter: search" >
                            <td>{{item.nome}}</td>
                            <td style="float: right;">
                                <button name="comentarioPrato" ng-click="listarModerarComentarios(item.id)" class="btn btn-primary" data-toggle="modal" data-target="#modalComentarios">Comentários</button>
                                <button name="editarPrato" ng-click="editar(item.id)" class="btn btn-primary" data-toggle="modal" data-target="#modal2">Editar</button>
                                <button name="eliminarPrato" ng-click="ocultar(item.id)" class="btn btn-primary">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                </table>

                <div id="modal1" class="modal fade bs-example-modal-lg"  focus-group focus-group-head="loop" focus-group-tail="loop" focus-stacktabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h2>Adicionar Prato</h2><br><br>
                                            <input type="text" class="modal_nome" id="modal_nome" placeholder="Nome do Prato"/><br><br>
                                            <input class="modal_preco" id="modal_preco" placeholder="Preço do Prato" /><br><br>
                                            <input type="text" class="modal_desc" id="modal_desc" placeholder="Descrição do Prato" /><br><br><br>
                                            <input type="file" class="modal_file" id="modal_file" style="color: white" /><br><br>
                                            <h3> Valores Nutricionais</h3><br>
                                            <input type="text" class="modal_calorias" id="modal_calorias" placeholder="Calorias"/><br><br>
                                            <input type="hcP" class="modal_hc" id="modal_hc" placeholder="Hidratos de Carbono"/><br><br>
                                            <input type="gorduraP" class="modal_gordura" id="modal_gordura" placeholder="Gordura"/><br><br>
                                            <button id="textarea" type="button" ng-click="adicionar()" class="btn btn-default" focus-element="autofocus" data-dismiss="modal">Adicionar</button>

                                            
                                    </div>
                                </div>
                            </div>
                           
                      </div>


                <div id="modal2" class="modal fade bs-example-modal-lg"  focus-group focus-group-head="loop" focus-group-tail="loop" focus-stacktabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h2>Editar Prato</h2><br><br>
                                            <input type="text" class="modal-title" id="nomeP" placeholder="Nome do Prato"/><br><br>
                                            <input id="precoP" placeholder="Preço do Prato" /><br><br>
                                            <input type="text"  id="descP" placeholder="Descrição do Prato" /><br><br><br>
                                            <input type="file" class="modal-title" id="modal_title" style="color: white" /><br><br>
                                            <h3> Valores Nutricionais</h3><br>
                                            <input type="text" class="modal-title" id="modal_title" placeholder="Calorias"/><br><br>
                                            <input type="text" class="modal-title" id="modal_title" placeholder="Hidratos de Carbono"/><br><br>
                                            <input type="text" class="modal-title" id="modal_title" placeholder="Gordura"/><br><br>
                                             <button id="textarea" type="button" ng-click="alterar()" class="btn btn-default" focus-element="autofocus" data-dismiss="modal">Guardar</button>
                                            
                                    </div>
                                </div>
                            </div>
                           
                      </div>

        <!--Moderacao de comentarios-->
        
        <div id="modalComentarios" class="modal fade bs-example-modal-lg"  focus-group focus-group-head="loop" focus-group-tail="loop" focus-stacktabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h2>Comentários</h2><br><br>
                                            <table id="tableComentarios" class="table table-striped table-hover">
                                            <tr ng-repeat= "item in comentarios | filter: search">
                                            	<td>
                                            	Nome: {{item.nome}} <br>
                                            	Email:{{item.email}}
	                                          	</td>                                        	
         
												<td >
	                                            <textarea  id="comentarioC" rows="2" cols="33" >{{item.descricao}}</textarea>
	                                        	</td>
	                                        	<td > 
                                            	Exibir no ecrã:	<input type="checkbox" name="ecra" ng-checked="item.estado==0" ng-model="item.estado" ng-true-value="0" ng-false-value="1" ng-change="updateModerarComentarios(item.id,item.estado)">
	                                          	</td>
                                            </tr>
                                            </table>
                                          
                                            <button id="textarea" type="button" ng-click="" class="btn btn-default" focus-element="autofocus" data-dismiss="modal">Fechar</button>
                                            
                                    </div>
                                </div>
                            </div>

        <!--Moderacao de comentarios-->        
        
        
        
        
                  
            </div>
        </div>
    </div>


</body>
</html>
