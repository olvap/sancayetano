/* *******************************************************************************************************************
								CATEGORIAS
*******************************************************************************************************************
*/


(function() {
  angular.module('SancayetanoApp').controller('InvoicesController', [
    '$http', '$location', '$scope', '$timeout', 'Invoice', function($http, $location, $scope, $timeout, Invoice) {
      $scope.calcularIVA = function() {
        $scope.invoice.iva = $scope.invoice.subtotal * 0.21;
        return $scope.calcularTotal();
      };
      return $scope.calcularTotal = function() {
        var iva, subtotal;
        subtotal = $scope.invoice.subtotal;
        iva = $scope.invoice.subtotal * 0.21;
        return $scope.invoice.total = subtotal + iva;
      };
    }
  ]);

}).call(this);
