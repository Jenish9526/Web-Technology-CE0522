var app = angular.module("searchApp", []);

app.controller("searchController", function($scope) {

    $scope.search = function(event) {

        if (event.key === "Enter") {

            $scope.result = $scope.searchText;

        }

    };

});