var app = angular.module("menuApp", []);

app.controller('menuController', ["$scope", "$http", function($scope,$http, $location,filter){
  
 //Buscar dados à bd smartmenu tabela entradas
$scope.displayDataEntradas = function(){
	$http.get("listarDados.php?type=1").success(function(data){
		$scope.entradas = data;
		$scope.pratos = $scope.entradas;
		$scope.tabelaDestino = 1; //PARA SABER SE PARA QUAL TABELA FOI O COMENTARIO
	});		
}

 //Buscar dados à bd smartmenu tabela sopas
$scope.displayDataSopas = function(){
	$http.get("listarDados.php?type=2").success(function(data){
		$scope.sopas = data;
		$scope.pratos = $scope.sopas;
		$scope.tabelaDestino = 2;

	});		
}

 //Buscar dados à bd smartmenu tabela pp
$scope.displayDataPP = function(){
	$http.get("listarDados.php?type=3").success(function(data){
		$scope.pp = data;
		$scope.pratos = $scope.pp;
		$scope.tabelaDestino = 3;

	});		
}

 //Buscar dados à bd smartmenu tabela sobremesas
$scope.displayDataSobremesas = function(){
	$http.get("listarDados.php?type=4").success(function(data){
		$scope.sobremesas = data;
		$scope.pratos = $scope.sobremesas;
		$scope.tabelaDestino = 4;

	});		
}


$scope.currentId = -1; //Id da receita do botao que foi clicado para quando clicamos no comenatario saber qual foi o prato
$scope.ler=function(ref_prato_click){
	$scope.currentId = ref_prato_click;
	

	// identificar linha do array com o ref_prato correspondente
	//precisamos da posição que dita o array para conseguirmos ir buscar os restantes dados para alem da referencia do prato.
	var posicaoArray = 0;
		for(var i=0; i<$scope.pratos.length;i++){
		if($scope.pratos[i].id == ref_prato_click){
			posicaoArray = i;
		}
	}




	//Mudar os conteudos do modal
	document.getElementById('modal_title').innerHTML = $scope.pratos[posicaoArray].nome; 
	//na divisão respetiva, coloca se o texto da base de dados
	document.getElementById('modal_dadosVN').innerHTML = $scope.pratos[posicaoArray].descricao;
}



$scope.comentar=function(ref_prato_click){
	
	//Pegar no texto que foi inserido e...
	//$(document).ready(function (ref_prato_click) {
	
	    var val = $.trim(document.getElementById('comentario').value);
	    if (val != "") {
	        $http.get("comentarios.php?type="+$scope.tabelaDestino+"&id="+ref_prato_click+"&comentario="+$("#comentario").val()+"&nome="+$("#nomeComentador").val()+"&email="+$("#email").val()).sucess();
		
	    }else{
	    	alert('Deve introduzir um comentário para o poder submeter!'); // quando se clica em "comentar" e nao se introduziu texto nenhum
	    }

	//document.getElementById('IDnomeComentador').value = "";
	
	//});

}

$scope.eliminar=function(ref_prato_click){

	$http.get("delete.php?type="+$scope.tabelaDestino+"&ref_prato="+ref_prato_click).success(function(data){
		// Recarregar dados atualizados na tabela
		switch($scope.tabelaDestino){
			case 1:{
				$scope.displayDataEntradas();
				break;
			}
			case 2:{
				$scope.displayDataSopas();
				break;
			}
			case 3:{
				$scope.displayDataPP();
				break;
			}
			case 4:{
				$scope.displayDataSobremesas();
				break;
			}
		}

		//alert("O prato foi eliminado com sucesso!");	
	});

}



$scope.ocultar=function(ref_prato_click){

	$http.get("ocultar.php?type="+$scope.tabelaDestino+"&ref_prato="+ref_prato_click).success(function(data){
		// Recarregar dados atualizados na tabela
		switch($scope.tabelaDestino){
			case 1:{
				$scope.displayDataEntradas();
				break;
			}
			case 2:{
				$scope.displayDataSopas();
				break;
			}
			case 3:{
				$scope.displayDataPP();
				break;
			}
			case 4:{
				$scope.displayDataSobremesas();
				break;
			}
		}

		//alert("O prato foi eliminado com sucesso!");	
	});

}



$scope.adicionar = function(){
	var nome_prato = document.getElementById('modal_nome').value;
	var preco_prato = document.getElementById('modal_preco').value;
	var desc_prato = document.getElementById('modal_desc').value;
	$http.get("adicionar.php?type="+$scope.tabelaDestino+"&nome_prato="+nome_prato+"&preco_prato="+preco_prato+"&desc_prato="+desc_prato).success(function(data){
		//alert("O prato foi adicionado com sucesso!");
			switch($scope.tabelaDestino){
			case 1:{
				$scope.displayDataEntradas();
				break;
			}
			case 2:{
				$scope.displayDataSopas();
				break;
			}
			case 3:{
				$scope.displayDataPP();
				break;
			}
			case 4:{
				$scope.displayDataSobremesas();
				break;
			}
		}

		document.getElementById('modal_nome').value = "";
		document.getElementById('modal_preco').value = "";
		document.getElementById('modal_desc').value = "";
	});
}

$scope.editar=function(ref_prato_click){

		$scope.ref_prato_alterar = ref_prato_click;

		var posicaoArray = 0;
		for(var i=0; i<$scope.pratos.length;i++){
		if($scope.pratos[i].id == ref_prato_click){
			posicaoArray = i;
		}
	}



	document.getElementById('nomeP').value = $scope.pratos[posicaoArray].nome;
	document.getElementById('precoP').value = $scope.pratos[posicaoArray].preco;
	document.getElementById('descP').value = $scope.pratos[posicaoArray].descricao;
}


$scope.alterar=function(){

	var nome_prato = document.getElementById('nomeP').value;
	var preco_prato = document.getElementById('precoP').value;
	var desc_prato = document.getElementById('descP').value;

	$http.get("alterar.php?type="+$scope.tabelaDestino+"&ref="+$scope.ref_prato_alterar+"&nome_prato="+nome_prato+"&preco_prato="+preco_prato+"&desc_prato="+desc_prato).success(function(data){

			switch($scope.tabelaDestino){
			case 1:{
				$scope.displayDataEntradas();
				break;
			}
			case 2:{
				$scope.displayDataSopas();
				break;
			}
			case 3:{
				$scope.displayDataPP();
				break;
			}
			case 4:{
				$scope.displayDataSobremesas();
				break;
			}
		}

	});

}



//Funcoes para a edição de comentarios
$scope.listarModerarComentarios = function(ref_prato){
	$http.get("listarComentarios.php?type=0&id="+ref_prato).success(function(data){
		$scope.comentarios = data;

	});		
}


$scope.updateModerarComentarios = function(id, estado){
	$http.get("updateComentarios.php?type=0&id="+id+"&estado="+estado).success();	
}



}]);
