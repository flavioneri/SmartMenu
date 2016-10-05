var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", function($scope,$http, $location,filter){
  $scope.data = [
    {id_prato: 1, nome: "Bacalhau à Brás", preco: "10.00€"},
    {id_prato: 20, nome: "Picanha", preco: "15.00€"},
    {id_prato: 3, nome: "Arroz de Marisco", preco: "18.50€"},
    {id_prato: 4, nome: "Francesinha", preco: "12.5€"},
    {id_prato: 5, nome: "Arroz de Pato", preco: "9.00€"}
  ];
  
$scope.currentId = -1; //Id da receita do botao que foi clicado para quando clicamos no comenatario saber qual foi o prato
$scope.ler=function(id_prato){
	$scope.currentId = id_prato;

	//var guarda_nomePrato = document.getElementById("modal_div1");


}

$scope.comment=function(){
	if($scope.currentId>0){
		alert("Comentario no prato "+$scope.currentId)
	}
}


}]);
