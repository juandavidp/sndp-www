// Creación del módulo
var angularRoutingApp = angular.module('angularRoutingApp', ['ngRoute','ngLoadScript']);

// Configuración de las rutas
angularRoutingApp.config(function($routeProvider) {

	$routeProvider
//ENTIDADES
		.when('/crear_entidad', {
			templateUrl	: '/entidad/add'
		})
		.when('/listar_entidad', {
			templateUrl : '/entidad',
			controller: 'cache_entidad'
		})
		.when('/editar_entidad/:id', {
			templateUrl : function(urlattr){
                return '/entidad/edit/' + urlattr.id ;
            }
		})
		//USUARIOS
		.when('/crear_usuario', {
			templateUrl : '/usuario/add'
		})
		.when('/listar_usuario', {
			templateUrl : '/usuario',
			controller: 'cache_usuario'
		})
		.when('/editar_usuario/:id', {
			templateUrl : function(urlattr){
                return '/usuario/edit/' + urlattr.id;
            }
		})
		/*.otherwise({
			redirectTo: '/login'
		});*/
});

//no borrar no se porque
angularRoutingApp.controller('mainController', function($scope) {
	$scope.message = 'Hola, Mundo!';
});

angularRoutingApp.controller('cache_entidad', function ($scope, $templateCache) {
    $templateCache.remove('/entidad');
    // or
    $templateCache.removeAll();
});

angularRoutingApp.controller('cache_usuario', function ($scope, $templateCache) {
    $templateCache.remove('/usuario');
    // or
    $templateCache.removeAll();
});
