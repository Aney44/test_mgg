/**
 * The main controller for the app. The controller:
 * - retrieves and persists the model via Restangular
 * - exposes the model to the template and provides event handlers
 *
 * root_path & assets_path variables are set inside index.html.twig globally
 *
 * @type {angular.Module}
 */


angular.module('ApiClient.controllers', ['ngCookies'])
    .controller('Login', ['AuthHandler', '$scope', '$window', '$cookies', 'Restangular', 'Digest', '$modal', function (AuthHandler, $scope, $window, $cookies, Restangular, Digest, $modal) {
        // On Submit function
        $scope.getSalt = function () {
            var username = $scope.username;
            var password = $scope.password;
            // Get Salt
            Restangular
                .oneUrl('salts', root_path + 'public/salts/' + username).get()
                .then(function (response) {
                    var salt = response.salt;
                    // Encrypt password accordingly to generate secret
                    Digest.cipher(password, salt).then(function (secret) {
                        // Display salt and secret for this example
                        $scope.salt = salt;
                        $scope.secret = secret;

                        // Store auth informations in cookies for page refresh
                        $cookies.put('username', $scope.username);
                        $cookies.put('secret', $scope.secret);

                        $window.location = '#/users';
                    }, function (err) {
                        console.log(err);
                    });
                });
        };
    }])
    .controller('UserController', ['$scope', '$window', 'Restangular', '$modal', function ($scope, $window, Restangular, $modal) {

        $scope.users = [];
        $scope.paging = {
            'prev': 0,
            'current': 0,
            'next': 0,
            'pages': 0
        };

        $scope.getUsersList = function (page) {
            Restangular
                .all('users').getList(
                {'page':page}
                )
                .then(function (response) {
                    $scope.paging ={
                        'prev': response[0],
                        'current': response[1],
                        'next': response[2],
                        'pages': response[3],
                    } ;
                    $scope.users = response[4];
                });
        };
        $scope.getUsersList(1);

        $scope.addPage = function (user) {
            $modal.open({
                animation: true,
                templateUrl: assets_path2 + '/users/user-add.html',
                controller: 'UserModalInstanceCtrl',
                resolve: {
                    user: user,
                    UserController:$scope
                }
            });
        };

        $scope.editPage = function (user) {
            $modal.open({
                animation: true,
                templateUrl: assets_path2 + '/users/user-edit.html',
                controller: 'UserModalInstanceCtrl',
                resolve: {
                    user: user,
                    UserController:$scope
                }
            });
        };

    }])
    .controller('UserModalInstanceCtrl', ['$scope', '$modalInstance', 'Restangular','UserController', 'user', function ($scope, $modalInstance, Restangular,UserController, user) {

        $scope.user = user;

        $scope.Restangular = Restangular;


        $scope.ok = function () {
            $modalInstance.close();
            UserController.getUsersList(1);
        };

        $scope.delete = function (user) {
            Restangular.one("users", user.id).remove();
            $modalInstance.close();
            UserController.getUsersList(1);
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };

        $scope.doneEditing = function (user) {
            // Restangular.one("users", user.id,user).put();
            // user.put();
            Restangular
                .one('users',user.id)
                .customPUT(user)
                .then(function (response) {
                    $modalInstance.close();
                    UserController.getUsersList(1);
                }, function (err) {
                    $scope.error= err.data.message;
                    $scope.errors ={
                        'email': err.data.errors.children.email.errors,
                        'login': err.data.errors.children.login.errors,
                        'password': err.data.errors.children.password.errors
                    };

                });
            // $modalInstance.close();
            // UserController.getUsersList(1);
        };

        $scope.doneAdd = function (user) {
            Restangular
                .all('users').post(user)
                .then(function (response) {
                    $modalInstance.close();
                    UserController.getUsersList(1);
                }, function (err) {
                    $scope.error= err.data.message;
                    $scope.errors ={
                        'email': err.data.errors.children.email.errors,
                        'login': err.data.errors.children.login.errors,
                        'password': err.data.errors.children.password.errors
                    };

                });
        };

    }])
    .controller('PageController', ['$scope', '$window', 'Restangular', '$modal', function ($scope, $window, Restangular, $modal) {

        $scope.pages = [];
        Restangular
            .all('pages').getList()
            .then(function (response) {
                $scope.pages = response;
            });

        $scope.showPage = function (page) {
            $modal.open({
                animation: true,
                templateUrl: assets_path + '/page/page-show.html',
                controller: 'PageModalInstanceCtrl',
                resolve: {
                    page: page
                }
            });
        };

        $scope.editPage = function (page) {
            $modal.open({
                animation: true,
                templateUrl: assets_path + '/page/page-edit.html',
                controller: 'PageModalInstanceCtrl',
                resolve: {
                    page: page
                }
            });
        };

    }])
    .controller('PageModalInstanceCtrl', ['$scope', '$modalInstance', 'page', function ($scope, $modalInstance, page) {

        $scope.page = page;

        $scope.ok = function () {
            $modalInstance.close();
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };

        $scope.doneEditing = function (page) {
            page.title = page.title.trim();
            page.put();
            $modalInstance.close();
        };

    }])
    .controller('ModalInstanceCtrl', ['$scope', '$modalInstance', 'items', 'title', 'introduction', function ($scope, $modalInstance, items, title, introduction) {

        $scope.items = items;
        $scope.title = title;
        $scope.introduction = introduction;


        $scope.ok = function () {
            $modalInstance.close();
        };

    }]);