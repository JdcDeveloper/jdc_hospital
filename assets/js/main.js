
var app = angular.module('Jdc', []);

// cargando selects con ajax
app.controller('api', function($scope, $http) {
	// countrys
	$http.get(BASE_URL + 'api/getcountrys')
	.then(function(response) {    

    // console.log(response.data[0].id_country);
     // console.log(response.data);

     $scope.countrys = response.data;

 });


	// states
	$http.get(BASE_URL + 'api/getstates')
	.then(function(response) {

		$scope.states = response.data;

	});

	// roles
	$http.get(BASE_URL + 'api/getroles')
	.then(function(response) {

		$scope.roles = response.data;

	});


});




