var app = angular.module("menuApp", []);

app.controller("menuController", ["$scope","$window", function($scope,$window){
  $scope.data = [
    {nome: "Bacalhau à Brás", preco: "10€"},
    {nome: "Picanha", preco: "15€"},
    {nome: "Arroz de Marisco", preco: "18.50€"}
    ];





}]);


//alert($scope.data[0])

//alert(document.getElementById("myTable").rows[1].innerHTML);

//alert("Row index is: " + nome.rowIndex[]);