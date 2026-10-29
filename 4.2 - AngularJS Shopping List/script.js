var app = angular.module("todoApp", []);
app.controller("TodoController", function($scope) {
    $scope.items = [];
    $scope.addItem = function() {
        if ($scope.newItem != "") {
            $scope.items.push($scope.newItem);
            $scope.newItem = "";
        }
    };
    $scope.removeItem = function(index) {
        $scope.items.splice(index, 1);
    };
});
