var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", "$http", function($scope,$http, $location,filter){
  
 //Buscar dados à bd smartmenu tabela entradas
$scope.displayDataEntradas = function(){
	$http.get("connectiondb.php?type=1").success(function(data){
		$scope.entradas = data;
	});		
}

 //Buscar dados à bd smartmenu tabela sopas
$scope.displayDataSopas = function(){
	$http.get("connectiondb.php?type=2").success(function(data){
		$scope.sopas = data;
	});		
}

 //Buscar dados à bd smartmenu tabela pp
$scope.displayDataPP = function(){
	$http.get("connectiondb.php?type=3").success(function(data){
		$scope.pratos = data;
	});		
}

 //Buscar dados à bd smartmenu tabela sobremesas
$scope.displayDataSobremesas = function(){
	$http.get("connectiondb.php?type=4").success(function(data){
		$scope.sobremesas = data;
	});		
}


$scope.currentId = -1; //Id da receita do botao que foi clicado para quando clicamos no comenatario saber qual foi o prato
$scope.ler=function(ref_prato_click){
	$scope.currentId = ref_prato_click;
	
	// identificar linha do array com o ref_prato correspondente
	//precisamos da posição que dita o array para conseguirmos ir buscar os restantes dados para alem da referencia do prato.
	var posicaoArray = 0;
	for(var i=0; i<$scope.pratos.length;i++){
		if($scope.pratos[i].ref_prato == ref_prato_click){
			posicaoArray = i;
		}
	}

	//Mudar os conteudos do modal
	document.getElementById('modal_title').innerHTML = $scope.pratos[posicaoArray].nome; //na divisão respetiva, coloca se o texto da base de dados
	document.getElementById('modal_dadosVN').innerHTML = $scope.pratos[posicaoArray].descricao;
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