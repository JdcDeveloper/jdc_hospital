
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




// cargando tabla users
app.controller('users', function($scope, $http) {
	// countrys
	$http.get(BASE_URL + 'api/getusers')
	.then(function(response) {  

		$scope.users = response.data;

	});

	// las funciones tienen que estar en el scope(alcance) del controlador
	// para que las reconosca
	$scope.edit = function() {
		alert("edit");
	};


	$scope.delete = function() {
		alert("delete");
	};


	


});// lo que este afuera de este scope no lo reconoce




document.getElementById("test").innerHTML="<p>algo mas</p>"














