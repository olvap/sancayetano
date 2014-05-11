'use strict'

SancayetanoApp = angular.module('SancayetanoApp'
	, ['fechaFilters', 'ui.keypress', 'models'])

SancayetanoApp.config ['$httpProvider', '$locationProvider', ($httpProvider, $locationProvider) -> 
	$httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest'
	# $locationProvider.html5Mode(true).hashPrefix('!');
]

SancayetanoApp.value('$strapConfig', {
	datepicker: {
		language: 'es',
		# format: 'M d, yyyy'
	}
})

if(!('contains' in String.prototype))
  String.prototype.contains = (str, startIndex) ->
   return -1 isnt this.indexOf(str, startIndex)
