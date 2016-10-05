var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", function($scope,$http, $location,filter){

  // POR ISTO NUMA BASE DE DADOS E IR LER .|.
  $scope.data = [
    {ref_prato: 1, nome: "Bacalhau à Brás", descricao: "É um prato...", preco: "10.00€"}, //id = 0 no array
    {ref_prato: 3, nome: "Arroz de Marisco", descricao: "É um prato...", preco: "18.50€"},
    {ref_prato: 4, nome: "Francesinha", descricao: "É um prato...", preco: "12.5€"},
    {ref_prato: 5, nome: "Arroz de Pato", descricao: "É um prato...", preco: "9.00€"},
    {ref_prato: 20, nome: "Picanha", descricao: "É um prato...", preco: "15.00€"}

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
	document.getElementById('modal_title').innerHTML = $scope.data[posicaoArray].nome;
	document.getElementById('modal_preco').innerHTML = $scope.data[posicaoArray].preco;
	document.getElementById('modal_descricao').innerHTML = $scope.data[posicaoArray].descricao;
}

$scope.comment=function(){
	if($scope.currentId>0){
		alert("Comentario no prato "+$scope.currentId)
	}
}


}]);
