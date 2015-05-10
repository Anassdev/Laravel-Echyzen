{{-- app/views/news/layout.html.blade --}}

@extends('public')

@section('title')
    @parent - News
@stop

@section('javascript')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="js/news/newsDisplay.js"></script>
    <script src="js/news/topMenu.js"></script>
    {{--<script src="js/news/newsAjax.js"></script>--}}

    <!-- Angular JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.min.js"></script>
    <script>
        //alert(laroute.url('news.index'));
        var app = angular.module('NewsApp', ['ngRoute']);

        app.config(function($routeProvider){
            $routeProvider.when('/', {templateUrl : 'js/news/home.php', controller: 'NewsCtrl'})
            .when('/lol', {templateUrl : 'js/news/eleve.html', controller: 'NewsCtrl'})
            .when('/lo', {templateUrl : 'views/news.testshow', controller: 'NewsCtrl'})
            .when('/rubrique/:rubriqueId', {templateUrl : 'views/news.testshow', controller: 'NewsCtrl'})
            //.when('/view1', { templateUrl: 'views/news.show' })
            //.when('/view2', { templateUrl: 'views/view2' })
            .otherwise({redirectTo: '/'});
        });

        app.factory('News', function($http, $q) {
            var factory = {
                news : false,

                getNews : function(){
                    var deferred = $q.defer();

                    $http.get('http://localhost/Laravel/public/news')
                        .success(function(data, status) {
                            factory.news = data;
                            deferred.resolve(factory.news);
                        }).error(function(data, status) {
                            deferred.reject('Erreur requete Ajax');
                        });
                        //alert(laroute.route('news.index'));
                    return deferred.promise;
                }
            };
            return factory;
        });
        app.controller('NewsCtrl', function($scope, $routeParams, News){
            // recuperation param
            $scope.rubriqueId = $routeParams.rubriqueId;

            $scope.isUndefinedOrNull = function (val) {
                //alert(thing);
                return angular.isUndefined(val) || val === null;
            }
            $scope.user = ['Marc', 'Jhon', 'Jay'];
            //console.log($scope);
            $scope.test = News.getNews().then(function(news){
            $scope.news = news.news;

/* test                $scope.friendlist = [
                        {'status': 'online',  'name': 'Sébastien'},
                        {'status': 'offline', 'name': 'Marion'},
                        {'status': 'online',  'name': 'Youssef'},
                        {'status': 'offline', 'name': 'Romain'},
                        {'status': 'offline', 'name': 'Laura'},
                        {'status': 'offline', 'name': 'Julien'},
                        {'status': 'online',  'name': 'Marie'}
                    ];
                    console.log($scope.friendlist);
                    */

               // alert($scope.test);
            }, function(msg){
                alert(msg);
            });

        });
    </script>
@stop

@section('stylesheet')
    @parent
    <link rel="stylesheet" href= "{{ asset('css/news/newsdesign.css') }}" />
@stop

@section('body')
    <div id="bandeau"><h1 class="bandeau_titre">News</h1><div id="bandeau_centre"></div></div>

    <div id="corps_bis" ng-app="NewsApp">
        <div id="news_container">
            {{--@yield('news_body')--}}
            <div ng-view></div>
            <div id="news1bis">
            </div>
        </div>
        <div id="news_categorie">
            <div id="rubrique">
                <h2>Rubrique</h2>
                <ul>
                </ul>
            </div>

            <div id="archive">
                <h2>Archive</h2>
                <ul>
                </ul>
            </div>
            <div id="mot_cle">
                <h2>Mots-Clés</h2>
                <ul>
                </ul>
            </div>

        </div>
    </div>

@endsection
