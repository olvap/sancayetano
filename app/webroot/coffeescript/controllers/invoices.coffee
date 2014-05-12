### *******************************************************************************************************************
								CATEGORIAS
******************************************************************************************************************* ###
angular.module('SancayetanoApp').controller 'InvoicesController'
	, ['$http', '$location', '$scope', '$timeout', 'Invoice'
		, ($http, $location, $scope, $timeout, Invoice) ->


	$scope.calcularIVA = ->
		$scope.invoice.iva = (+$scope.invoice.price + +$scope.invoice.insurance) * 0.21
		$scope.calcularSubtotal()

	$scope.calcularSubtotal = ->
		$scope.invoice.subtotal = +$scope.invoice.price
		$scope.invoice.subtotal += +$scope.invoice.insurance
		$scope.invoice.subtotal += +$scope.invoice.iva

		$scope.calcularTotal()
	
	$scope.calcularTotal = ->
		if $scope.invoice?
			$scope.invoice.total = +$scope.invoice.subtotal ? 0
			if +$scope.invoice.tgi? then $scope.invoice.total += +$scope.invoice.tgi
			if +$scope.invoice.api? then $scope.invoice.total += +$scope.invoice.api
			if +$scope.invoice.agua? then $scope.invoice.total += +$scope.invoice.agua
			if +$scope.invoice.stamped? then $scope.invoice.total += +$scope.invoice.stamped


	$timeout ->
		$scope.calcularTotal()
	, 50
]