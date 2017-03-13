angular
    .module ('lerntreff', [])
    .controller('treffenInsert', function($scope, $http){
    $scope.treffenInsert = function(){
        $http.post(
            "php/insertliste.php",
            {'ueberschrift':$scope.ueberschrift, 'studiengang':$scope.studiengang, 'semester':$scope.semester, 'modul':$scope.modul, 'ort':$scope.ort, 'datum':$scope.datum, 'zeit':$scope.zeit, 'beschreibung':$scope.beschreibung}
        ).success(function(data){
            alert(data);
            $scope.ueberschrift = null;
            $scope.studiengang = null;
            $scope.semester = null;
            $scope.modul = null;
            $scope.ort = null;
            $scope.datum = null;
            $scope.zeit = null;
            $scope.beschreibung = null;
        })

    }
});
