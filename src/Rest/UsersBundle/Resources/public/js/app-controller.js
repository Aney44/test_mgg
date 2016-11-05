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
        Restangular
            .all('users').getList()
            .then(function (response) {
                $scope.users = response;
            });


        $scope.addPage = function (user) {
            $modal.open({
                animation: true,
                templateUrl: assets_path2 + '/users/user-add.html',
                controller: 'UserModalInstanceCtrl',
                resolve: {
                    user: user
                }
            });
        };

        $scope.editPage = function (user) {
            $modal.open({
                animation: true,
                templateUrl: assets_path2 + '/users/user-edit.html',
                controller: 'UserModalInstanceCtrl',
                resolve: {
                    user: user
                }
            });
        };

    }])
    .controller('UserModalInstanceCtrl', ['$scope', '$modalInstance', 'Restangular', 'user', function ($scope, $modalInstance, Restangular, user) {

        $scope.user = user;
        $scope.Restangular = Restangular;

        $scope.ok = function () {
            $modalInstance.close();
        };

        $scope.delete = function (user) {
            user.remove();
            $modalInstance.close();
        };

        $scope.cancel = function () {
            $modalInstance.dismiss('cancel');
        };

        $scope.doneEditing = function (user) {
            user.put();
            $modalInstance.close();
        };

        $scope.doneAdd = function (user) {
            console.log($scope.post);
            Restangular
                .all('users').post(user)
                .then(function (response) {
                    $modalInstance.close();
                }, function (err) {
                    console.log(err);
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