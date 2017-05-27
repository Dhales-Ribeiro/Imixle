/**
 * Created by Dhales on 23/05/2017.
 */
application.config(function ($stateProvider, $urlRouterProvider) {
    $stateProvider
    // -----------------------------------------------------------------
    //  Definindo rota de layout
    // -----------------------------------------------------------------
        .state('/', {
            url: '/',
            templateUrl: '/views/home/index.html'
        })
        .state('sobre', {
            url: '/sobre',
            templateUrl: '/views/sobre/index.html'
        })
        .state('servicos', {
            url: '/servicos',
            templateUrl: '/views/servicos/index.html'
        })
        .state('contato', {
            url: '/contato',
            templateUrl: '/views/contato/index.html'
        })




    // -------------------------------------------------------------------------
    //  Definindo a rota inicial do sistema
    // -------------------------------------------------------------------------
    $urlRouterProvider.otherwise('/');
});