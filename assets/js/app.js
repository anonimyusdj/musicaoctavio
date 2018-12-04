var app = angular.module("octavio", ["angularSoundManager"]);

///////////////////factory///////////////////////
app.factory("admin", function($http) {
    var service = {};
    var urlBase = "app/server/php/"
    service.getConfig = function() {
        return $http.get(urlBase + "config.php", {
            params: {
                "table": "config",
                "opcion": "config"
            }
        })
    }
    return service;
});
////////////////////////////////////////////////


//////////////controller//////////////////////
app.controller("homeController", function($scope, admin, $http) {
    $scope.saludo = "Sitio de Musica de Octavio Vasquez";

    admin.getConfig().then(function(response) {
        //console.log(response.data.resultado[0]);
        $scope.color = response.data.resultado[0];
        // console.log($scope.color.background);
    });
});

app.controller("albumsController", function($scope, $http) {
    $scope.guardarAlbums = function(nombre, descripcion, foto) {
        $http.get("saveAlbums", {
            params: {
                'nombre': nombre,
                'descripcion': descripcion,
                'imagen': foto
            }
        }).then(function(response) {
            $scope.nombreAlbum = null;
            $scope.inspiracion = null;
            $scope.foto = null;
            console.log(response);
            $scope.getAlbums();
        });
    }
    $scope.getAlbums = function() {
        $http.get("getAlbums").then(function(response) {
            $scope.listAlbums = response.data.resultado;
            // console.data
        });
    }
});

app.controller("musica", function($scope, admin) {
    $scope.titulo = "aqui escucharas musica";
});
app.controller("login", function($scope, $http, admin) {

});
app.controller('musicaList', ['$scope', function($scope) {
    $scope.songs = [{
            id: 'one',
            title: 'Rain',
            url: 'http://www.schillmania.com/projects/soundmanager2/demo/_mp3/rain.mp3'
        },
        {
            id: 'two',
            title: 'Walking',
            url: 'http://www.schillmania.com/projects/soundmanager2/demo/_mp3/walking.mp3'
        },
        {
            id: 'three',
            title: 'Barrlping with Carl (featureblend.com)',
            url: 'http://www.freshly-ground.com/misc/music/carl-3-barlp.mp3'
        },
        {
            id: 'four',
            title: 'Angry cow sound?',
            url: 'http://www.freshly-ground.com/data/audio/binaural/Mak.mp3'
        },
        {
            id: 'five',
            title: 'Things that open, close and roll',
            url: 'http://www.freshly-ground.com/data/audio/binaural/Things%20that%20open,%20close%20and%20roll.mp3'
        }
    ];

}]);