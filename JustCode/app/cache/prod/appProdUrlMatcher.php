<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            if (0 === strpos($pathinfo, '/respuestascorrectas')) {
                // respuestascorrectas_index
                if (rtrim($pathinfo, '/') === '/respuestascorrectas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_respuestascorrectas_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'respuestascorrectas_index');
                    }

                    return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestascorrectasController::indexAction',  '_route' => 'respuestascorrectas_index',);
                }
                not_respuestascorrectas_index:

                // respuestascorrectas_show
                if (preg_match('#^/respuestascorrectas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_respuestascorrectas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestascorrectas_show')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestascorrectasController::showAction',));
                }
                not_respuestascorrectas_show:

                // respuestascorrectas_new
                if ($pathinfo === '/respuestascorrectas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_respuestascorrectas_new;
                    }

                    return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestascorrectasController::newAction',  '_route' => 'respuestascorrectas_new',);
                }
                not_respuestascorrectas_new:

                // respuestascorrectas_edit
                if (preg_match('#^/respuestascorrectas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_respuestascorrectas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestascorrectas_edit')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestascorrectasController::editAction',));
                }
                not_respuestascorrectas_edit:

                // respuestascorrectas_delete
                if (preg_match('#^/respuestascorrectas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_respuestascorrectas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuestascorrectas_delete')), array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\RespuestascorrectasController::deleteAction',));
                }
                not_respuestascorrectas_delete:

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

        if (0 === strpos($pathinfo, '/p')) {
            // principal
            if ($pathinfo === '/principal') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_principal;
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::principalAction',  '_route' => 'principal',);
            }
            not_principal:

            // perfil
            if ($pathinfo === '/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_perfil;
                }

                return array (  '_controller' => 'JustCode\\Bundle\\actividadesBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'perfil',);
            }
            not_perfil:

        }

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
