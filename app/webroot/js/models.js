(function() {
  angular.module('models', ['ngResource']).factory('Invoice', [
    '$resource', function($resource) {
      return $resource('/invoices.json', {
        callback: 'JSON_CALLBACK'
      }, {
        buscar: {
          method: 'GET'
        },
        get: {
          cache: true,
          method: 'GET',
          url: '/invoices.json'
        }
      });
    }
  ]);

}).call(this);
