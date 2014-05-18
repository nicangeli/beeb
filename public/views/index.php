<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>
            Angular AJAX Search
        </title>
        <script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
        <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div id="search" ng-controller="SearchController">
            <form>
                <input name="search" id="search" type="text" ng-model="query" ng-model-options="{ debounce: 500 }" ng-change="onEdit()">
                <button ng-click="onSearch()">Search</button>
            </form> 
            <div ng-repeat="result in results track by $index" ng-show="query">
                <ul>
                    <li>
                        <a href="{{result.url}}">{{result.title}}</a>
                    </li>
                </ul>
            </div>
            <p ng-hide="results.length > 0">
                No results to display.
            </p>
        </div>
    </body>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/models.js"></script>
    <script type="text/javascript" src="js/controllers.js"></script>
</html>
