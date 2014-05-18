angular.module('ProgramModel', [])
    .factory('Program', function($http) {
        return {
            query : function(q) {
                return $http.get('/api/programs/' + q);
            }
        }
    });