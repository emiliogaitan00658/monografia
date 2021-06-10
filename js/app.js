var myApp = angular.module('MyApp', [])
    myApp.controller('TercerControlador', ['$scope', function($scope){
        $scope.ListaNombres = [
            {nombre: '1'},
            {nombre: '2'}
        ]
    }]);