var myControllers = angular.module('myControllers', []);

myControllers.controller('SearchController', ['$scope', '$http', function($scope, $http) {

    $scope.onSearch = function() {
      $scope.onEdit();  
    };

    $scope.onEdit = function() {
      console.log($scope.query);
      $http({method: 'GET', url: 'api/programs/' + $scope.query}).
            success(function(data, status, headers, config) {
              // this callback will be called asynchronously
              // when the response is available
              console.log('success');
              console.log(data);
              $scope.results = data;
            }).
            error(function(data, status, headers, config) {
              // called asynchronously if an error occurs
              // or server returns response with an error status.
              console.error(data);
              console.log('error');
            });
    }

}]);