'use strict';

/* Services */

var phonecatServices = angular.module('phonecatServices', ['ngResource']);



phonecatServices.factory('Base', ['$resource',
  function($resource){
    return $resource('bases/:baseId.json', {}, {
      query: {method:'GET', params:{baseId:'bases'}, isArray:true}
    });
  }]);


