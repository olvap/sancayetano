/* *******************************************************************************************************************
								CATEGORIAS
*******************************************************************************************************************
*/


(function() {
  angular.module('SancayetanoApp').controller('InvoicesController', [
    '$http', '$location', '$scope', '$timeout', 'Invoice', function($http, $location, $scope, $timeout, Invoice) {
      $scope.calcularIVA = function() {
        if (+($scope.invoice.gastos_administrativos != null)) {
          $scope.invoice.iva = (+$scope.invoice.price + +$scope.invoice.gastos_administrativos) * 0.21;
        } else {
          $scope.invoice.iva = +$scope.invoice.price * 0.21;
        }
        return $scope.calcularSubtotal();
      };
      $scope.calcularSubtotal = function() {
        $scope.invoice.subtotal = +$scope.invoice.price;
        if (+($scope.invoice.gastos_administrativos != null)) {
          $scope.invoice.subtotal += +$scope.invoice.gastos_administrativos;
        }
        $scope.invoice.subtotal += +$scope.invoice.insurance;
        $scope.invoice.subtotal += +$scope.invoice.iva;
        return $scope.calcularTotal();
      };
      $scope.calcularTotal = function() {
        var _ref;
        if ($scope.invoice != null) {
          $scope.invoice.total = (_ref = +$scope.invoice.subtotal) != null ? _ref : 0;
          if (+($scope.invoice.tgi != null)) {
            $scope.invoice.total += +$scope.invoice.tgi;
          }
          if (+($scope.invoice.api != null)) {
            $scope.invoice.total += +$scope.invoice.api;
          }
          if (+($scope.invoice.agua != null)) {
            $scope.invoice.total += +$scope.invoice.agua;
          }
          if (+($scope.invoice.stamped != null)) {
            $scope.invoice.total += +$scope.invoice.stamped;
          }
          if (+($scope.invoice.retenciones != null)) {
            $scope.invoice.total -= +$scope.invoice.retenciones;
          }
          if (+($scope.invoice.percepciones != null)) {
            return $scope.invoice.total -= +$scope.invoice.percepciones;
          }
        }
      };
      return $timeout(function() {
        return $scope.calcularTotal();
      }, 50);
    }
  ]);

}).call(this);
