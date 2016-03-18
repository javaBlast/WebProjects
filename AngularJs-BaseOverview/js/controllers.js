'use strict';

/* Controllers */

var phonecatControllers = angular.module('phonecatControllers', []);

  phonecatControllers.controller('BaseListCtrl', ['$scope', 'Base',
  function($scope, Base) {
      $scope.bases = Base.query();
      $scope.orderProp = 'age';
    }]);

  phonecatControllers.controller('BaseDetailCtrl', ['$scope', '$routeParams', 'Base',
    function($scope, $routeParams, Base) {
      $scope.base = Base.get({baseId: $routeParams.baseId}, function(base) {
        $scope.mainImageUrl = base.images[0];
      });

      $scope.setImage = function(imageUrl) {
        $scope.mainImageUrl = imageUrl;
      };
    }]);

    phonecatControllers.controller('AdminPanelCtrl', ['$scope', 'Base',
      function($scope, Base) {
        $scope.bases = Base.query();
        $scope.orderProp = 'age';
      }]);


