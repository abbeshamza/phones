﻿

var phonecatControllers = angular.module('phonecatControllers', []);


phonecatControllers.controller('PhoneListCtrl', function ($scope, $http) {
	$http.post("php/phones.json").success(function(data){
		$scope.phones = data;
	});

	$scope.orderProp="age";
});

phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', function($scope, $routeParams) {
    $scope.phoneId = $routeParams.phoneId;
  }]);