<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // acme_api_client
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_api_client');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'RestUsersBundle::index.html.twig',  '_route' => 'acme_api_client',);
        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/doc') && preg_match('#^/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/v2')) {
                // index
                if (0 === strpos($pathinfo, '/api/v2/index') && preg_match('#^/api/v2/index(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::indexAction',  '_format' => NULL,));
                }
                not_index:

                if (0 === strpos($pathinfo, '/api/v2/users')) {
                    // new_user
                    if (0 === strpos($pathinfo, '/api/v2/users/new') && preg_match('#^/api/v2/users/new(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_new_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_user')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::newUserAction',  '_format' => NULL,));
                    }
                    not_new_user:

                    // get_users
                    if (preg_match('#^/api/v2/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::getUsersAction',  '_format' => NULL,));
                    }
                    not_get_users:

                    // get_user
                    if (preg_match('#^/api/v2/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::getUserAction',  '_format' => NULL,));
                    }
                    not_get_user:

                    // post_user
                    if (preg_match('#^/api/v2/users(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_user')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::postUserAction',  '_format' => NULL,));
                    }
                    not_post_user:

                    // put_user
                    if (preg_match('#^/api/v2/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_put_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_user')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::putUserAction',  '_format' => NULL,));
                    }
                    not_put_user:

                    // patch_user
                    if (preg_match('#^/api/v2/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_user;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::patchUserAction',  '_format' => NULL,));
                    }
                    not_patch_user:

                    // delete_users
                    if (preg_match('#^/api/v2/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_delete_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_users')), array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::deleteUsersAction',  '_format' => NULL,));
                    }
                    not_delete_users:

                }

                // users_homepage
                if (rtrim($pathinfo, '/') === '/api/v2') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'users_homepage');
                    }

                    return array (  '_controller' => 'Rest\\UsersBundle\\Controller\\UserController::indexAction',  '_route' => 'users_homepage',);
                }

            }

            if (0 === strpos($pathinfo, '/api/pages')) {
                // api_edit_page
                if (preg_match('#^/api/pages/(?P<id>[^/]++)/edit(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_edit_page;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_edit_page')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::editPageAction',  '_format' => NULL,));
                }
                not_api_edit_page:

                // api_get_pages
                if (preg_match('#^/api/pages(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_pages;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_pages')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::getPagesAction',  '_format' => NULL,));
                }
                not_api_get_pages:

                // api_get_page
                if (preg_match('#^/api/pages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_page;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_page')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::getPageAction',  '_format' => NULL,));
                }
                not_api_get_page:

                // api_post_page
                if (preg_match('#^/api/pages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_page;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_page')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::postPageAction',  '_format' => NULL,));
                }
                not_api_post_page:

                // api_put_page
                if (preg_match('#^/api/pages/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_api_put_page;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_put_page')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::putPageAction',  '_format' => NULL,));
                }
                not_api_put_page:

            }

        }

        // public_get_salt
        if (0 === strpos($pathinfo, '/public/salts') && preg_match('#^/public/salts/(?P<username>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_public_get_salt;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_get_salt')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\UserController::getSaltAction',  '_format' => NULL,));
        }
        not_public_get_salt:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
