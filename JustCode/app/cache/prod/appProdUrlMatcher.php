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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
