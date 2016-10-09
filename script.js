var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", function($scope,$http, $location,filter){

  // POR ISTO NUMA BASE DE DADOS E IR LER 
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
	//precisamos da posição que dita o array para conseguirmos ir buscar os restantes dados para alem da referencia do prato.
	var posicaoArray = 0;
	for(var i=0; i<$scope.data.length;i++){
		if($scope.data[i].ref_prato == ref_prato_click){
			posicaoArray = i;
	
		}
	}

	//Mudar os conteudos do modal
	document.getElementById('modal_title').innerHTML = $scope.data[posicaoArray].nome; //na divisão respetiva, coloca se o texto da base de dados
	document.getElementById('modal_preco').innerHTML = $scope.data[posicaoArray].preco;
	document.getElementById('modal_descricao').innerHTML = $scope.data[posicaoArray].descricao;
}



$scope.comentar=function(){
	
	//Pegar no texto que foi inserido e...
	$(document).ready(function () {
	    var val = $.trim($("textarea").val());
	    if (val != "") {
	        alert(val);
	    }else{
	    	alert('Deve introduzir um comentário para o poder submeter!'); // quando se clica em "comentar" e nao se introduziu texto nenhum
	    }

	$('textarea').val(''); //depois de digitar o comentário e clicar em "comentar", apaga-se o que se escrevei no textarea
});


}

}]);

