angular.module('myControllers', [])
  .controller('SearchController', ['$scope', '$http', 'Program', function($scope, $http, Program) {

    $scope.onSearch = function() {
      $scope.onEdit();  
    };

    $scope.onEdit = function() {
      console.log($scope.query);

      Program.query($scope.query)
        .success(function(data, status, headers, config) {
          $scope.results = data;
        })
        .error(function(data, status, headers, config) {
          console.log(data);
        })
    }

  }]);