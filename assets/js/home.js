require.config({
    baseUrl: "assets/js",
    paths: {
        "angular": "angular.min",
        "app": 'apg',
        'coreModule': 'coreModule',
        "jq": "jquery",
        "mtz": "materialize.min",
        //"css": "css"
    },
    shim: {
        'app': {
            deps: ['angular', 'coreModule'],
            // exports: 'exports'
        },
        'coreModule': {
            deps: ['angular'],
        },
        "mtz": {
            deps: ['jq'],
        },
        /* "css": {
             deps: ['mtz', 'jq'],
         }*/

    }
});

require(['angular'], function() {

});

require(['jq'], function() {

})

require(['app'], function() {
    angular.bootstrap(document, ['app']);
});

require(['mtz'], function() {

});
//require(['css']);