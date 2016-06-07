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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // projet_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'projet_homepage');
            }

            return array (  '_controller' => 'Projet\\ProjetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'projet_homepage',);
        }

        // 403
        if ($pathinfo === '/403') {
            return array (  '_controller' => 'Projet\\ProjetBundle\\Controller\\DefaultController::error403Action',  '_route' => 403,);
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

                    return array (  '_controller' => 'Client\\ClientBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Client\\ClientBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Client\\ClientBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Client\\ClientBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        if (0 === strpos($pathinfo, '/administration/member')) {
            // client_index
            if (rtrim($pathinfo, '/') === '/administration/member') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_client_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client_index');
                }

                return array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::indexAction',  '_route' => 'client_index',);
            }
            not_client_index:

            // client_show
            if (preg_match('#^/administration/member/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_client_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::showAction',));
            }
            not_client_show:

            // client_new
            if ($pathinfo === '/administration/member/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_client_new;
                }

                return array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }
            not_client_new:

            // client_edit
            if (preg_match('#^/administration/member/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_client_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::editAction',));
            }
            not_client_edit:

            // client_delete
            if (preg_match('#^/administration/member/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Client\\ClientBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        // client_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'client_homepage');
            }

            return array (  '_controller' => 'Client\\ClientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'client_homepage',);
        }

        if (0 === strpos($pathinfo, '/administration')) {
            if (0 === strpos($pathinfo, '/administration/saison')) {
                // saison_index
                if (rtrim($pathinfo, '/') === '/administration/saison') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_saison_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'saison_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SaisonController::indexAction',  '_route' => 'saison_index',);
                }
                not_saison_index:

                // saison_show
                if (preg_match('#^/administration/saison/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_saison_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SaisonController::showAction',));
                }
                not_saison_show:

                // saison_new
                if ($pathinfo === '/administration/saison/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_saison_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SaisonController::newAction',  '_route' => 'saison_new',);
                }
                not_saison_new:

                // saison_edit
                if (preg_match('#^/administration/saison/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_saison_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SaisonController::editAction',));
                }
                not_saison_edit:

                // saison_delete
                if (preg_match('#^/administration/saison/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_saison_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'saison_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SaisonController::deleteAction',));
                }
                not_saison_delete:

            }

            if (0 === strpos($pathinfo, '/administration/typecuisson')) {
                // typecuisson_index
                if (rtrim($pathinfo, '/') === '/administration/typecuisson') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typecuisson_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typecuisson_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TypeCuissonController::indexAction',  '_route' => 'typecuisson_index',);
                }
                not_typecuisson_index:

                // typecuisson_show
                if (preg_match('#^/administration/typecuisson/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typecuisson_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecuisson_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TypeCuissonController::showAction',));
                }
                not_typecuisson_show:

                // typecuisson_new
                if ($pathinfo === '/administration/typecuisson/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typecuisson_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TypeCuissonController::newAction',  '_route' => 'typecuisson_new',);
                }
                not_typecuisson_new:

                // typecuisson_edit
                if (preg_match('#^/administration/typecuisson/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typecuisson_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecuisson_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TypeCuissonController::editAction',));
                }
                not_typecuisson_edit:

                // typecuisson_delete
                if (preg_match('#^/administration/typecuisson/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typecuisson_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecuisson_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TypeCuissonController::deleteAction',));
                }
                not_typecuisson_delete:

            }

            if (0 === strpos($pathinfo, '/administration/prix')) {
                // prix_index
                if (rtrim($pathinfo, '/') === '/administration/prix') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_prix_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'prix_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\PrixController::indexAction',  '_route' => 'prix_index',);
                }
                not_prix_index:

                // prix_show
                if (preg_match('#^/administration/prix/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_prix_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prix_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\PrixController::showAction',));
                }
                not_prix_show:

                // prix_new
                if ($pathinfo === '/administration/prix/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_prix_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\PrixController::newAction',  '_route' => 'prix_new',);
                }
                not_prix_new:

                // prix_edit
                if (preg_match('#^/administration/prix/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_prix_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prix_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\PrixController::editAction',));
                }
                not_prix_edit:

                // prix_delete
                if (preg_match('#^/administration/prix/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_prix_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prix_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\PrixController::deleteAction',));
                }
                not_prix_delete:

            }

            if (0 === strpos($pathinfo, '/administration/menu')) {
                // menu_index
                if (rtrim($pathinfo, '/') === '/administration/menu') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_menu_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'menu_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MenuController::indexAction',  '_route' => 'menu_index',);
                }
                not_menu_index:

                // menu_show
                if (preg_match('#^/administration/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_menu_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MenuController::showAction',));
                }
                not_menu_show:

                // menu_new
                if ($pathinfo === '/administration/menu/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_menu_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
                }
                not_menu_new:

                // menu_edit
                if (preg_match('#^/administration/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_menu_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MenuController::editAction',));
                }
                not_menu_edit:

                // menu_delete
                if (preg_match('#^/administration/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_menu_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MenuController::deleteAction',));
                }
                not_menu_delete:

            }

            // sideBar
            if ($pathinfo === '/administration/include/sideBar') {
                return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IncludeController::sideBarAction',  '_route' => 'sideBar',);
            }

            if (0 === strpos($pathinfo, '/administration/s')) {
                if (0 === strpos($pathinfo, '/administration/signalrecette')) {
                    if (0 === strpos($pathinfo, '/administration/signalrecette/notification')) {
                        // notificationCommentaire
                        if ($pathinfo === '/administration/signalrecette/notificationCommentaire') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CommentaireSignalController::commentaireAction',  '_route' => 'notificationCommentaire',);
                        }

                        // notificationSignal
                        if ($pathinfo === '/administration/signalrecette/notificationSignal') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::notificationAction',  '_route' => 'notificationSignal',);
                        }

                    }

                    // commentaireSignalAjout
                    if (0 === strpos($pathinfo, '/administration/signalrecette/commentaireSignalAjout') && preg_match('#^/administration/signalrecette/commentaireSignalAjout/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaireSignalAjout')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CommentaireSignalController::commentaireSignalAjoutAction',));
                    }

                    // signalrecette_index
                    if (rtrim($pathinfo, '/') === '/administration/signalrecette') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_signalrecette_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'signalrecette_index');
                        }

                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::indexAction',  '_route' => 'signalrecette_index',);
                    }
                    not_signalrecette_index:

                    // signalrecette_show
                    if (preg_match('#^/administration/signalrecette/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_signalrecette_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalrecette_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::showAction',));
                    }
                    not_signalrecette_show:

                    // signalrecette_new
                    if (0 === strpos($pathinfo, '/administration/signalrecette/new') && preg_match('#^/administration/signalrecette/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_signalrecette_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalrecette_new')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::newAction',));
                    }
                    not_signalrecette_new:

                    // signalrecette_edit
                    if (preg_match('#^/administration/signalrecette/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_signalrecette_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalrecette_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::editAction',));
                    }
                    not_signalrecette_edit:

                    // signalrecette_delete
                    if (preg_match('#^/administration/signalrecette/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_signalrecette_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalrecette_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SignalRecetteController::deleteAction',));
                    }
                    not_signalrecette_delete:

                }

                if (0 === strpos($pathinfo, '/administration/stat')) {
                    // stat_navigateur
                    if ($pathinfo === '/administration/stat/navigateur') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::navigateurAction',  '_route' => 'stat_navigateur',);
                    }

                    if (0 === strpos($pathinfo, '/administration/stat/redaction')) {
                        // stat_redactionTotal
                        if ($pathinfo === '/administration/stat/redactionTotal') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionTotalAction',  '_route' => 'stat_redactionTotal',);
                        }

                        // stat_redactionRecetteTotal
                        if ($pathinfo === '/administration/stat/redactionRecetteTotal') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionRecetteTotalAction',  '_route' => 'stat_redactionRecetteTotal',);
                        }

                        // stat_redactionMonth
                        if ($pathinfo === '/administration/stat/redactionMonth') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionMonthAction',  '_route' => 'stat_redactionMonth',);
                        }

                        // stat_redactionRecetteMonth
                        if ($pathinfo === '/administration/stat/redactionRecetteMonth') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionRecetteMonthAction',  '_route' => 'stat_redactionRecetteMonth',);
                        }

                        // stat_redactionDay
                        if ($pathinfo === '/administration/stat/redactionDay') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionDayAction',  '_route' => 'stat_redactionDay',);
                        }

                        // stat_redactionRecetteDay
                        if ($pathinfo === '/administration/stat/redactionRecetteDay') {
                            return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::redactionRecetteDayAction',  '_route' => 'stat_redactionRecetteDay',);
                        }

                    }

                    // stat_systeme
                    if ($pathinfo === '/administration/stat/systeme') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::systemeAction',  '_route' => 'stat_systeme',);
                    }

                    // stat_pays
                    if ($pathinfo === '/administration/stat/pays') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::paysAction',  '_route' => 'stat_pays',);
                    }

                    // stat_ville
                    if ($pathinfo === '/administration/stat/ville') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\StatController::villeAction',  '_route' => 'stat_ville',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/administration/member')) {
                // memberGestion
                if ($pathinfo === '/administration/member/all') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\Member\\MemberController::indexAction',  '_route' => 'memberGestion',);
                }

                // redacteurGestion
                if ($pathinfo === '/administration/member/redacteurGestion') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\Member\\RedacteurController::indexAction',  '_route' => 'redacteurGestion',);
                }

                // memberProfile
                if (0 === strpos($pathinfo, '/administration/member/profile') && preg_match('#^/administration/member/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberProfile')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\Member\\MemberProfileController::profileAction',));
                }

                // memberNouveau
                if ($pathinfo === '/administration/member/nouveau') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\Member\\MemberNouveauController::nouveauAction',  '_route' => 'memberNouveau',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/etablissement')) {
                // etablissement_index
                if (rtrim($pathinfo, '/') === '/administration/etablissement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_etablissement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'etablissement_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\EtablissementController::indexAction',  '_route' => 'etablissement_index',);
                }
                not_etablissement_index:

                // etablissement_show
                if (preg_match('#^/administration/etablissement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_etablissement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\EtablissementController::showAction',));
                }
                not_etablissement_show:

                // etablissement_new
                if ($pathinfo === '/administration/etablissement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_etablissement_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\EtablissementController::newAction',  '_route' => 'etablissement_new',);
                }
                not_etablissement_new:

                // etablissement_edit
                if (preg_match('#^/administration/etablissement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_etablissement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\EtablissementController::editAction',));
                }
                not_etablissement_edit:

                // etablissement_delete
                if (preg_match('#^/administration/etablissement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_etablissement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\EtablissementController::deleteAction',));
                }
                not_etablissement_delete:

            }

            if (0 === strpos($pathinfo, '/administration/specialite')) {
                // specialite_index
                if (rtrim($pathinfo, '/') === '/administration/specialite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specialite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'specialite_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SpecialiteController::indexAction',  '_route' => 'specialite_index',);
                }
                not_specialite_index:

                // specialite_show
                if (preg_match('#^/administration/specialite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_specialite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialite_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SpecialiteController::showAction',));
                }
                not_specialite_show:

                // specialite_new
                if ($pathinfo === '/administration/specialite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_specialite_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SpecialiteController::newAction',  '_route' => 'specialite_new',);
                }
                not_specialite_new:

                // specialite_edit
                if (preg_match('#^/administration/specialite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_specialite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialite_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SpecialiteController::editAction',));
                }
                not_specialite_edit:

                // specialite_delete
                if (preg_match('#^/administration/specialite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_specialite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialite_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SpecialiteController::deleteAction',));
                }
                not_specialite_delete:

            }

            if (0 === strpos($pathinfo, '/administration/filtre')) {
                // filtre_index
                if (rtrim($pathinfo, '/') === '/administration/filtre') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_filtre_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'filtre_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\FiltreController::indexAction',  '_route' => 'filtre_index',);
                }
                not_filtre_index:

                // filtre_show
                if (preg_match('#^/administration/filtre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_filtre_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\FiltreController::showAction',));
                }
                not_filtre_show:

                // filtre_new
                if ($pathinfo === '/administration/filtre/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_filtre_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\FiltreController::newAction',  '_route' => 'filtre_new',);
                }
                not_filtre_new:

                // filtre_edit
                if (preg_match('#^/administration/filtre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_filtre_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\FiltreController::editAction',));
                }
                not_filtre_edit:

                // filtre_delete
                if (preg_match('#^/administration/filtre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_filtre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'filtre_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\FiltreController::deleteAction',));
                }
                not_filtre_delete:

            }

            if (0 === strpos($pathinfo, '/administration/ambiance')) {
                // ambiance_index
                if (rtrim($pathinfo, '/') === '/administration/ambiance') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ambiance_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ambiance_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\AmbianceController::indexAction',  '_route' => 'ambiance_index',);
                }
                not_ambiance_index:

                // ambiance_show
                if (preg_match('#^/administration/ambiance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ambiance_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ambiance_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\AmbianceController::showAction',));
                }
                not_ambiance_show:

                // ambiance_new
                if ($pathinfo === '/administration/ambiance/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ambiance_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\AmbianceController::newAction',  '_route' => 'ambiance_new',);
                }
                not_ambiance_new:

                // ambiance_edit
                if (preg_match('#^/administration/ambiance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ambiance_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ambiance_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\AmbianceController::editAction',));
                }
                not_ambiance_edit:

                // ambiance_delete
                if (preg_match('#^/administration/ambiance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ambiance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ambiance_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\AmbianceController::deleteAction',));
                }
                not_ambiance_delete:

            }

            if (0 === strpos($pathinfo, '/administration/difficulte')) {
                // difficulte_index
                if (rtrim($pathinfo, '/') === '/administration/difficulte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_difficulte_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'difficulte_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DifficulteController::indexAction',  '_route' => 'difficulte_index',);
                }
                not_difficulte_index:

                // difficulte_show
                if (preg_match('#^/administration/difficulte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_difficulte_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'difficulte_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DifficulteController::showAction',));
                }
                not_difficulte_show:

                // difficulte_new
                if ($pathinfo === '/administration/difficulte/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_difficulte_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DifficulteController::newAction',  '_route' => 'difficulte_new',);
                }
                not_difficulte_new:

                // difficulte_edit
                if (preg_match('#^/administration/difficulte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_difficulte_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'difficulte_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DifficulteController::editAction',));
                }
                not_difficulte_edit:

                // difficulte_delete
                if (preg_match('#^/administration/difficulte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_difficulte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'difficulte_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DifficulteController::deleteAction',));
                }
                not_difficulte_delete:

            }

            if (0 === strpos($pathinfo, '/administration/nationalite')) {
                // nationalite_index
                if (rtrim($pathinfo, '/') === '/administration/nationalite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nationalite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'nationalite_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\NationaliteController::indexAction',  '_route' => 'nationalite_index',);
                }
                not_nationalite_index:

                // nationalite_show
                if (preg_match('#^/administration/nationalite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nationalite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nationalite_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\NationaliteController::showAction',));
                }
                not_nationalite_show:

                // nationalite_new
                if ($pathinfo === '/administration/nationalite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_nationalite_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\NationaliteController::newAction',  '_route' => 'nationalite_new',);
                }
                not_nationalite_new:

                // nationalite_edit
                if (preg_match('#^/administration/nationalite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_nationalite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nationalite_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\NationaliteController::editAction',));
                }
                not_nationalite_edit:

                // nationalite_delete
                if (preg_match('#^/administration/nationalite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_nationalite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nationalite_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\NationaliteController::deleteAction',));
                }
                not_nationalite_delete:

            }

            if (0 === strpos($pathinfo, '/administration/categorie')) {
                // categorie_index
                if (rtrim($pathinfo, '/') === '/administration/categorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorie_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/administration/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CategorieController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ($pathinfo === '/administration/categorie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                }
                not_categorie_new:

                // categorie_edit
                if (preg_match('#^/administration/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CategorieController::editAction',));
                }
                not_categorie_edit:

                // categorie_delete
                if (preg_match('#^/administration/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_categorie_delete:

            }

            if (0 === strpos($pathinfo, '/administration/topic')) {
                // topic_index
                if (rtrim($pathinfo, '/') === '/administration/topic') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_topic_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'topic_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TopicController::indexAction',  '_route' => 'topic_index',);
                }
                not_topic_index:

                // topic_show
                if (preg_match('#^/administration/topic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_topic_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TopicController::showAction',));
                }
                not_topic_show:

                // topic_new
                if ($pathinfo === '/administration/topic/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_topic_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TopicController::newAction',  '_route' => 'topic_new',);
                }
                not_topic_new:

                // topic_edit
                if (preg_match('#^/administration/topic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_topic_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TopicController::editAction',));
                }
                not_topic_edit:

                // topic_delete
                if (preg_match('#^/administration/topic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_topic_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\TopicController::deleteAction',));
                }
                not_topic_delete:

            }

            if (0 === strpos($pathinfo, '/administration/langue')) {
                // langue_index
                if (rtrim($pathinfo, '/') === '/administration/langue') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'langue_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\LangueController::indexAction',  '_route' => 'langue_index',);
                }
                not_langue_index:

                // langue_show
                if (preg_match('#^/administration/langue/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_langue_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\LangueController::showAction',));
                }
                not_langue_show:

                // langue_new
                if ($pathinfo === '/administration/langue/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_langue_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\LangueController::newAction',  '_route' => 'langue_new',);
                }
                not_langue_new:

                // langue_edit
                if (preg_match('#^/administration/langue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_langue_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\LangueController::editAction',));
                }
                not_langue_edit:

                // langue_delete
                if (preg_match('#^/administration/langue/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_langue_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'langue_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\LangueController::deleteAction',));
                }
                not_langue_delete:

            }

            if (0 === strpos($pathinfo, '/administration/subcategorie')) {
                // menuSubCategorie
                if (0 === strpos($pathinfo, '/administration/subcategorie/menuSubCategorie') && preg_match('#^/administration/subcategorie/menuSubCategorie/(?P<menu>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'menuSubCategorie')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::menuSubCategorieAction',));
                }

                // subcategorie_index
                if (rtrim($pathinfo, '/') === '/administration/subcategorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subcategorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subcategorie_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::indexAction',  '_route' => 'subcategorie_index',);
                }
                not_subcategorie_index:

                // subcategorie_show
                if (preg_match('#^/administration/subcategorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_subcategorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategorie_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::showAction',));
                }
                not_subcategorie_show:

                // subcategorie_new
                if ($pathinfo === '/administration/subcategorie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_subcategorie_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::newAction',  '_route' => 'subcategorie_new',);
                }
                not_subcategorie_new:

                // subcategorie_edit
                if (preg_match('#^/administration/subcategorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_subcategorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategorie_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::editAction',));
                }
                not_subcategorie_edit:

                // subcategorie_delete
                if (preg_match('#^/administration/subcategorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_subcategorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategorie_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SubCategorieController::deleteAction',));
                }
                not_subcategorie_delete:

            }

            if (0 === strpos($pathinfo, '/administration/ingredient')) {
                // ingredient_index
                if (rtrim($pathinfo, '/') === '/administration/ingredient') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingredient_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ingredient_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IngredientController::indexAction',  '_route' => 'ingredient_index',);
                }
                not_ingredient_index:

                // ingredient_show
                if (preg_match('#^/administration/ingredient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingredient_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IngredientController::showAction',));
                }
                not_ingredient_show:

                // ingredient_new
                if ($pathinfo === '/administration/ingredient/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingredient_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IngredientController::newAction',  '_route' => 'ingredient_new',);
                }
                not_ingredient_new:

                // ingredient_edit
                if (preg_match('#^/administration/ingredient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingredient_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IngredientController::editAction',));
                }
                not_ingredient_edit:

                // ingredient_delete
                if (preg_match('#^/administration/ingredient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ingredient_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingredient_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\IngredientController::deleteAction',));
                }
                not_ingredient_delete:

            }

            if (0 === strpos($pathinfo, '/administration/theme')) {
                // theme_index
                if (rtrim($pathinfo, '/') === '/administration/theme') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_theme_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'theme_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ThemeController::indexAction',  '_route' => 'theme_index',);
                }
                not_theme_index:

                // theme_show
                if (preg_match('#^/administration/theme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_theme_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'theme_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ThemeController::showAction',));
                }
                not_theme_show:

                // theme_new
                if ($pathinfo === '/administration/theme/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_theme_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ThemeController::newAction',  '_route' => 'theme_new',);
                }
                not_theme_new:

                // theme_edit
                if (preg_match('#^/administration/theme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_theme_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'theme_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ThemeController::editAction',));
                }
                not_theme_edit:

                // theme_delete
                if (preg_match('#^/administration/theme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_theme_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'theme_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ThemeController::deleteAction',));
                }
                not_theme_delete:

            }

            if (0 === strpos($pathinfo, '/administration/recette')) {
                // recette_index
                if (rtrim($pathinfo, '/') === '/administration/recette') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recette_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'recette_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\RecetteController::indexAction',  '_route' => 'recette_index',);
                }
                not_recette_index:

                // recette_show
                if (preg_match('#^/administration/recette/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recette_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recette_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\RecetteController::showAction',));
                }
                not_recette_show:

                // recette_new
                if ($pathinfo === '/administration/recette/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_recette_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\RecetteController::newAction',  '_route' => 'recette_new',);
                }
                not_recette_new:

                // recette_edit
                if (preg_match('#^/administration/recette/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_recette_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recette_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\RecetteController::editAction',));
                }
                not_recette_edit:

                // recette_delete
                if (preg_match('#^/administration/recette/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_recette_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recette_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\RecetteController::deleteAction',));
                }
                not_recette_delete:

            }

            if (0 === strpos($pathinfo, '/administration/surveillance')) {
                // surveillance_index
                if (rtrim($pathinfo, '/') === '/administration/surveillance') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'surveillance_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SurveillanceController::indexAction',  '_route' => 'surveillance_index',);
                }

                if (0 === strpos($pathinfo, '/administration/surveillance/media')) {
                    // surveillance_mediaArticle
                    if ($pathinfo === '/administration/surveillance/mediaArticle') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SurveillanceController::mediaArticleAction',  '_route' => 'surveillance_mediaArticle',);
                    }

                    // surveillance_mediaRecette
                    if ($pathinfo === '/administration/surveillance/mediaRecette') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SurveillanceController::mediaRecetteAction',  '_route' => 'surveillance_mediaRecette',);
                    }

                }

                // surveillance_categoriesurveillance
                if ($pathinfo === '/administration/surveillance/categoriesurveillance') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\SurveillanceController::categorieSurveillanceAction',  '_route' => 'surveillance_categoriesurveillance',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/messagerie')) {
                // messagerie_index
                if (rtrim($pathinfo, '/') === '/administration/messagerie') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'messagerie_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MessagerieController::indexAction',  '_route' => 'messagerie_index',);
                }

                if (0 === strpos($pathinfo, '/administration/messagerie/sen')) {
                    // messagerie_send
                    if ($pathinfo === '/administration/messagerie/send') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MessagerieController::sendMailAction',  '_route' => 'messagerie_send',);
                    }

                    // messagerie_sent
                    if ($pathinfo === '/administration/messagerie/sent') {
                        return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MessagerieController::sendAction',  '_route' => 'messagerie_sent',);
                    }

                }

                // messagerie_draft
                if ($pathinfo === '/administration/messagerie/draft') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MessagerieController::draftAction',  '_route' => 'messagerie_draft',);
                }

                // messagerie_trash
                if ($pathinfo === '/administration/messagerie/trash') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\MessagerieController::trashAction',  '_route' => 'messagerie_trash',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/confidentialite')) {
                // confidentialite_index
                if (rtrim($pathinfo, '/') === '/administration/confidentialite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_confidentialite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'confidentialite_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ConfidentialiteController::indexAction',  '_route' => 'confidentialite_index',);
                }
                not_confidentialite_index:

                // confidentialite_show
                if (preg_match('#^/administration/confidentialite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_confidentialite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'confidentialite_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ConfidentialiteController::showAction',));
                }
                not_confidentialite_show:

                // confidentialite_new
                if ($pathinfo === '/administration/confidentialite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_confidentialite_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ConfidentialiteController::newAction',  '_route' => 'confidentialite_new',);
                }
                not_confidentialite_new:

                // confidentialite_edit
                if (preg_match('#^/administration/confidentialite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_confidentialite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'confidentialite_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ConfidentialiteController::editAction',));
                }
                not_confidentialite_edit:

                // confidentialite_delete
                if (preg_match('#^/administration/confidentialite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_confidentialite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'confidentialite_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ConfidentialiteController::deleteAction',));
                }
                not_confidentialite_delete:

            }

            if (0 === strpos($pathinfo, '/administration/article')) {
                // article_nbr
                if ($pathinfo === '/administration/article/nbr') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::nbrAction',  '_route' => 'article_nbr',);
                }

                // article_grid
                if ($pathinfo === '/administration/article/grid') {
                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::gridAction',  '_route' => 'article_grid',);
                }

                // article_index
                if (rtrim($pathinfo, '/') === '/administration/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article_index');
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
                }
                not_article_index:

                // article_show
                if (preg_match('#^/administration/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::showAction',));
                }
                not_article_show:

                // article_new
                if ($pathinfo === '/administration/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_article_new;
                    }

                    return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }
                not_article_new:

                // article_edit
                if (preg_match('#^/administration/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::editAction',));
                }
                not_article_edit:

                // article_delete
                if (preg_match('#^/administration/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_article_delete:

            }

            // administration_homepage
            if (rtrim($pathinfo, '/') === '/administration') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administration_homepage');
                }

                return array (  '_controller' => 'Administration\\AdministrationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'administration_homepage',);
            }

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
