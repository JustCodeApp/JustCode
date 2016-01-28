<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/preguntas')) {
            // preguntas_index
            if (rtrim($pathinfo, '/') === '/preguntas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_preguntas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'preguntas_index');
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\PreguntasController::indexAction',  '_route' => 'preguntas_index',);
            }
            not_preguntas_index:

            // preguntas_show
            if (preg_match('#^/preguntas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_preguntas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_show')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\PreguntasController::showAction',));
            }
            not_preguntas_show:

            // preguntas_new
            if ($pathinfo === '/preguntas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_preguntas_new;
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\PreguntasController::newAction',  '_route' => 'preguntas_new',);
            }
            not_preguntas_new:

            // preguntas_edit
            if (preg_match('#^/preguntas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_preguntas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_edit')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\PreguntasController::editAction',));
            }
            not_preguntas_edit:

            // preguntas_delete
            if (preg_match('#^/preguntas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_preguntas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_delete')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\PreguntasController::deleteAction',));
            }
            not_preguntas_delete:

        }

        if (0 === strpos($pathinfo, '/respuestas')) {
            // respuestas_index
            if (rtrim($pathinfo, '/') === '/respuestas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuestas_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'respuestas_index');
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestasController::indexAction',  '_route' => 'respuestas_index',);
            }
            not_respuestas_index:

            // respuestas_show
            if (preg_match('#^/respuestas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuestas_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestas_show')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestasController::showAction',));
            }
            not_respuestas_show:

            // respuestas_new
            if ($pathinfo === '/respuestas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_respuestas_new;
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestasController::newAction',  '_route' => 'respuestas_new',);
            }
            not_respuestas_new:

            // respuestas_edit
            if (preg_match('#^/respuestas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_respuestas_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestas_edit')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestasController::editAction',));
            }
            not_respuestas_edit:

            // respuestas_delete
            if (preg_match('#^/respuestas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_respuestas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestas_delete')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestasController::deleteAction',));
            }
            not_respuestas_delete:

        }

        if (0 === strpos($pathinfo, '/niveles')) {
            // niveles_index
            if (rtrim($pathinfo, '/') === '/niveles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_niveles_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'niveles_index');
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\NivelesController::indexAction',  '_route' => 'niveles_index',);
            }
            not_niveles_index:

            // niveles_show
            if (preg_match('#^/niveles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_niveles_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveles_show')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\NivelesController::showAction',));
            }
            not_niveles_show:

            // niveles_new
            if ($pathinfo === '/niveles/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_niveles_new;
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\NivelesController::newAction',  '_route' => 'niveles_new',);
            }
            not_niveles_new:

            // niveles_edit
            if (preg_match('#^/niveles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_niveles_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveles_edit')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\NivelesController::editAction',));
            }
            not_niveles_edit:

            // niveles_delete
            if (preg_match('#^/niveles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_niveles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'niveles_delete')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\NivelesController::deleteAction',));
            }
            not_niveles_delete:

        }

        // just_codeactividades_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'just_codeactividades_homepage');
            }

            return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'just_codeactividades_homepage',);
        }

        // compilator
        if ($pathinfo === '/compilator') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_compilator;
            }

            return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::compilatorAction',  '_route' => 'compilator',);
        }
        not_compilator:

        // testType
        if ($pathinfo === '/testType') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_testType;
            }

            return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::testTypeAction',  '_route' => 'testType',);
        }
        not_testType:

        // verdaderofalso
        if ($pathinfo === '/verdaderofalso') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_verdaderofalso;
            }

            return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::verdaderofalsoAction',  '_route' => 'verdaderofalso',);
        }
        not_verdaderofalso:

        // principal
        if ($pathinfo === '/principal') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_principal;
            }

            return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::principalAction',  '_route' => 'principal',);
        }
        not_principal:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
