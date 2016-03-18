'use strict';

/* App Module */

var phonecatApp = angular.module('phonecatApp', [
  'ngRoute',
  'phonecatAnimations',

  'phonecatControllers',
  'phonecatFilters',
  'phonecatServices'
]);


phonecatApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/bases', {
        templateUrl: 'partials/base-list.html',
        controller: 'BaseListCtrl'
      }).
      when('/bases/:baseId', {
        templateUrl: 'partials/base-detail.html',
        controller: 'BaseDetailCtrl'
      }).
      when('/admin',{
        templateUrl: 'partials/admin-panel.html',
        controller: 'AdminPanelCtrl'
      }).
      otherwise({
        redirectTo: '/bases'
      });
  }]);
