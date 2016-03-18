var app = angular.module('dbApp', []);
app.controller('dbCtrl', function($scope, $http) {
    $http.get("db.php")
    .then(function (response) {$scope.names = response.data.records;});

    
});

