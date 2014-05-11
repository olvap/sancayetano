angular.module('models', ['ngResource'])
	
	# Invoice
	.factory('Invoice', ['$resource', ($resource) ->
		$resource '/invoices.json'
			, { callback:'JSON_CALLBACK' }
			, buscar: {method:'GET'}
				, get: {cache: true, method: 'GET', url: '/invoices.json'}
	])
	