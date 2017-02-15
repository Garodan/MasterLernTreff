var app = angular.module ('lerntreff', ['ngRoute', 'controller'])

.config(function($routeProvider) {
  $routeProvider
  .when('/', {
    templateUrl:'templates/login.php'
  })
  .when('/startseite', {
    templateUrl.'templates/starteite.html'
  })
})
