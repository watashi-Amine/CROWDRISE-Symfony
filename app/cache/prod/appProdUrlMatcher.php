<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/projet')) {
            // utilisateur_homepage
            if ($pathinfo === '/projet/hello') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\DefaultController::indexAction',  '_route' => 'utilisateur_homepage',);
            }

            // projet
            if ($pathinfo === '/projet/projets') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet',);
            }

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::showAction',));
            }

            // projet_new
            if ($pathinfo === '/projet/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }

            // projet_create
            if ($pathinfo === '/projet/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_projet_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::createAction',  '_route' => 'projet_create',);
            }
            not_projet_create:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::editAction',));
            }

            // projet_update
            if (preg_match('#^/projet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::updateAction',));
            }

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

            // catproj
            if (0 === strpos($pathinfo, '/projet/catproj') && preg_match('#^/projet/catproj/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catproj')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::catAction',));
            }

            // projet_recherche
            if ($pathinfo === '/projet/recherche') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::rechercheTraiAction',  '_route' => 'projet_recherche',);
            }

            // indexowner
            if ($pathinfo === '/projet/indexowner') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProjetController::indexownerAction',  '_route' => 'indexowner',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // crowd_homepage
        if (rtrim($pathinfo, '/') === '/hello') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'crowd_homepage');
            }

            return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::indexAction',  '_route' => 'crowd_homepage',);
        }

        // projet22
        if ($pathinfo === '/projet22') {
            return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::projetAceuilAction',  '_route' => 'projet22',);
        }

        // modifierProfile
        if ($pathinfo === '/modifierProfile') {
            return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::modifierProfileAction',  '_route' => 'modifierProfile',);
        }

        if (0 === strpos($pathinfo, '/profile/info')) {
            // profile_info
            if ($pathinfo === '/profile/info') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::profile_infoAction',  '_route' => 'profile_info',);
            }

            // ADMIN
            if ($pathinfo === '/profile/info') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::profile_infoAction',  '_route' => 'ADMIN',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // admin_acceuil
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_acceuil');
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::adminAction',  '_route' => 'admin_acceuil',);
                }

                // afficher_All_User
                if (rtrim($pathinfo, '/') === '/admin/afficher_All_User') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'afficher_All_User');
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::afficher_All_UserAction',  '_route' => 'afficher_All_User',);
                }

                // edit_profile
                if (0 === strpos($pathinfo, '/admin/edit_profile') && preg_match('#^/admin/edit_profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_profile')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::edit_profileAction',));
                }

                // rechercheUserTraitement
                if (rtrim($pathinfo, '/') === '/admin/recherche') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rechercheUserTraitement');
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::rechercheUserTraitementAction',  '_route' => 'rechercheUserTraitement',);
                }

            }

            // acceuil
            if ($pathinfo === '/acceuil') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::projetAceuilAction',  '_route' => 'acceuil',);
            }

            // afficherProjet
            if ($pathinfo === '/afficherProjet') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\usernavController::afficherProjetAction',  '_route' => 'afficherProjet',);
            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

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
