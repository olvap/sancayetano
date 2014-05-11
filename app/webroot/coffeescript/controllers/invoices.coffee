### *******************************************************************************************************************
								CATEGORIAS
******************************************************************************************************************* ###
angular.module('SancayetanoApp').controller 'InvoicesController'
	, ['$http', '$location', '$scope', '$timeout', 'Invoice'
		, ($http, $location, $scope, $timeout, Invoice) ->


	$scope.calcularIVA = ->
		$scope.invoice.iva = $scope.invoice.subtotal * 0.21
		$scope.calcularTotal()

	$scope.calcularTotal = ->
		subtotal = $scope.invoice.subtotal
		iva = $scope.invoice.subtotal * 0.21

		$scope.invoice.total = subtotal + iva
]