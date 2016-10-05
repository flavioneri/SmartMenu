var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", function($scope,$http, $location,filter){
  $scope.data = [
    {ref_prato: 1, nome: "Bacalhau à Brás", preco: "10.00€"}, //id = 0 no array
    {ref_prato: 3, nome: "Arroz de Marisco", preco: "18.50€"},
    {ref_prato: 4, nome: "Francesinha", preco: "12.5€"},
    {ref_prato: 5, nome: "Arroz de Pato", preco: "9.00€"},
    {ref_prato: 20, nome: "Picanha", preco: "15.00€"}

  ];
  
$scope.currentId = -1; //Id da receita do botao que foi clicado para quando clicamos no comenatario saber qual foi o prato
$scope.ler=function(ref_prato_click){
	$scope.currentId = ref_prato_click;
	
	// identificar linha do array com o ref_prato correspondente
	var posicaoArray = 0;
	for(var i=0; i<$scope.data.length;i++){
		if($scope.data[i].ref_prato == ref_prato_click){
			posicaoArray = i;
	
		}
	}

	//Mudar os conteudos do modal
	document.getElementById('modal_title').innerHTML= $scope.data[posicaoArray].nome;
		
}

$scope.comment=function(){
	if($scope.currentId>0){
		alert("Comentario no prato "+$scope.currentId)
	}
}


}]);
