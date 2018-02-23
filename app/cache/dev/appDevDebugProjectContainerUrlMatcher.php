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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
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
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_logout');
        }

        // _home_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home_default');
            }

            return array (  '_controller' => 'HomeBundle\\Controller\\HomeController::indexAction',  '_route' => '_home_default',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // _home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'HomeBundle\\Controller\\HomeController::indexAction',  '_route' => '_home',);
            }

            // _home_map
            if ($pathinfo === '/home/map') {
                return array (  '_controller' => 'HomeBundle\\Controller\\HomeController::mapInitAction',  '_route' => '_home_map',);
            }

        }

        if (0 === strpos($pathinfo, '/contracts')) {
            // _contracts
            if ($pathinfo === '/contracts') {
                return array (  '_controller' => 'ContractBundle\\Controller\\ContractController::indexAction',  '_route' => '_contracts',);
            }

            // _contracts_search
            if ($pathinfo === '/contracts/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__contracts_search;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ContractController::searchAction',  '_route' => '_contracts_search',);
            }
            not__contracts_search:

            // _contract_initializeForm
            if (0 === strpos($pathinfo, '/contracts/initializeForm') && preg_match('#^/contracts/initializeForm(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__contract_initializeForm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_initializeForm')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::initializeAddFormAction',  'id' => NULL,));
            }
            not__contract_initializeForm:

            // _contract_add
            if ($pathinfo === '/contracts/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__contract_add;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ContractController::addContractAction',  '_route' => '_contract_add',);
            }
            not__contract_add:

            if (0 === strpos($pathinfo, '/contracts/detail')) {
                // _contract_edit
                if (preg_match('#^/contracts/detail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__contract_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_edit')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::editContractAction',));
                }
                not__contract_edit:

                // _contract_detail
                if (preg_match('#^/contracts/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_detail')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::showContractDetailAction',));
                }

                // _contract_detail_map
                if (preg_match('#^/contracts/detail/(?P<id>[^/]++)/map$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__contract_detail_map;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_detail_map')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::initializeMapAction',));
                }
                not__contract_detail_map:

                // _contract_comment_add
                if (preg_match('#^/contracts/detail/(?P<id>[^/]++)/addComment$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__contract_comment_add;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_comment_add')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::addCommentAction',));
                }
                not__contract_comment_add:

            }

        }

        // _helicopter_find
        if ($pathinfo === '/findHelicopterFiltered') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__helicopter_find;
            }

            return array (  '_controller' => 'ContractBundle\\Controller\\ContractController::findHelicopterFilteredAction',  '_route' => '_helicopter_find',);
        }
        not__helicopter_find:

        // _contract_archive
        if (0 === strpos($pathinfo, '/projects/detail/archive') && preg_match('#^/projects/detail/archive/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__contract_archive;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_archive')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::archiveAction',));
        }
        not__contract_archive:

        // _contract_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__contract_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_contract_delete')), array (  '_controller' => 'ContractBundle\\Controller\\ContractController::deleteAction',));
        }
        not__contract_delete:

        if (0 === strpos($pathinfo, '/projects')) {
            // _projects
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::indexAction',  '_route' => '_projects',);
            }

            // _projects_search
            if ($pathinfo === '/projects/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__projects_search;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::searchAction',  '_route' => '_projects_search',);
            }
            not__projects_search:

            // _project_initializeForm
            if (0 === strpos($pathinfo, '/projects/initializeForm') && preg_match('#^/projects/initializeForm(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__project_initializeForm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_project_initializeForm')), array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::initializeAddFormAction',  'id' => NULL,));
            }
            not__project_initializeForm:

            // _projects_add
            if ($pathinfo === '/projects/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__projects_add;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::addProjectAction',  '_route' => '_projects_add',);
            }
            not__projects_add:

            if (0 === strpos($pathinfo, '/projects/detail')) {
                // _project_edit
                if (preg_match('#^/projects/detail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__project_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_project_edit')), array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::editProjectAction',));
                }
                not__project_edit:

                // _project_upgrade
                if (preg_match('#^/projects/detail/(?P<id>[^/]++)/upgrade$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__project_upgrade;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_project_upgrade')), array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::upgradeProjectAction',));
                }
                not__project_upgrade:

                // _project_detail
                if (preg_match('#^/projects/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_project_detail')), array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::showProjectDetailAction',));
                }

                // _project_detail_map
                if (preg_match('#^/projects/detail/(?P<id>[^/]++)/map$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_project_detail_map')), array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::initializeMapAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/tenders')) {
            // _tenders
            if ($pathinfo === '/tenders') {
                return array (  '_controller' => 'ContractBundle\\Controller\\TenderController::indexAction',  '_route' => '_tenders',);
            }

            // _tenders_search
            if ($pathinfo === '/tenders/search') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__tenders_search;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\TenderController::searchAction',  '_route' => '_tenders_search',);
            }
            not__tenders_search:

            // _tender_initializeForm
            if (0 === strpos($pathinfo, '/tenders/initializeForm') && preg_match('#^/tenders/initializeForm(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__tender_initializeForm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_tender_initializeForm')), array (  '_controller' => 'ContractBundle\\Controller\\TenderController::initializeAddFormAction',  'id' => NULL,));
            }
            not__tender_initializeForm:

            // _tenders_add
            if ($pathinfo === '/tenders/add') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__tenders_add;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\TenderController::addTenderAction',  '_route' => '_tenders_add',);
            }
            not__tenders_add:

            if (0 === strpos($pathinfo, '/tenders/detail')) {
                // _tender_edit
                if (preg_match('#^/tenders/detail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not__tender_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_tender_edit')), array (  '_controller' => 'ContractBundle\\Controller\\TenderController::editTenderAction',));
                }
                not__tender_edit:

                // _tender_detail
                if (preg_match('#^/tenders/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_tender_detail')), array (  '_controller' => 'ContractBundle\\Controller\\TenderController::showTenderDetailAction',));
                }

                // _tender_upgrade
                if (preg_match('#^/tenders/detail/(?P<id>[^/]++)/upgrade$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_tender_upgrade')), array (  '_controller' => 'ContractBundle\\Controller\\TenderController::upgradeTenderAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/projects')) {
            // _search_bases
            if ($pathinfo === '/projects/bases') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__search_bases;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ProjectController::searchBasesAction',  '_route' => '_search_bases',);
            }
            not__search_bases:

            // _search_platforms
            if ($pathinfo === '/projects/platforms') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__search_platforms;
                }

                return array (  '_controller' => 'ContractBundle\\Controller\\ContractController::searchPlatformsAction',  '_route' => '_search_platforms',);
            }
            not__search_platforms:

        }

        // core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_homepage');
            }

            return array (  '_controller' => 'CoreBundle:Default:index',  '_route' => 'core_homepage',);
        }

        if (0 === strpos($pathinfo, '/aircraft')) {
            // _base
            if ($pathinfo === '/aircraft/base') {
                return array (  '_controller' => 'AircraftBundle\\Controller\\BaseController::indexAction',  '_route' => '_base',);
            }

            // _fleet
            if ($pathinfo === '/aircraft/fleet') {
                return array (  '_controller' => 'AircraftBundle\\Controller\\HelicopterController::indexAction',  '_route' => '_fleet',);
            }

            // _operator
            if ($pathinfo === '/aircraft/operator') {
                return array (  '_controller' => 'AircraftBundle\\Controller\\OperatorController::indexAction',  '_route' => '_operator',);
            }

        }

        if (0 === strpos($pathinfo, '/oilActivity')) {
            if (0 === strpos($pathinfo, '/oilActivity/oilCo')) {
                // _oilCompany
                if ($pathinfo === '/oilActivity/oilCompany') {
                    return array (  '_controller' => 'OilIndustryBundle\\Controller\\OilCompanyController::indexAction',  '_route' => '_oilCompany',);
                }

                // _oilCountry
                if ($pathinfo === '/oilActivity/oilCountries') {
                    return array (  '_controller' => 'OilIndustryBundle\\Controller\\OilCountryController::indexAction',  '_route' => '_oilCountry',);
                }

            }

            if (0 === strpos($pathinfo, '/oilActivity/platforms')) {
                // _platforms
                if ($pathinfo === '/oilActivity/platforms') {
                    return array (  '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::indexAction',  '_route' => '_platforms',);
                }

                if (0 === strpos($pathinfo, '/oilActivity/platforms/details')) {
                    // _platform_detail
                    if (preg_match('#^/oilActivity/platforms/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_platform_detail')), array (  '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::platformDetailAction',));
                    }

                    // _platform_detail_map
                    if (preg_match('#^/oilActivity/platforms/details/(?P<id>[^/]++)/map$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_platform_detail_map')), array (  '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::platformDetailMapAction',));
                    }

                    // _platform_initialize_form
                    if (preg_match('#^/oilActivity/platforms/details/(?P<id>[^/]++)/initializeEditForm$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_platform_initialize_form')), array (  '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::initializeEditPlatformFormAction',));
                    }

                    // _platform_edit
                    if (preg_match('#^/oilActivity/platforms/details/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_platform_edit')), array (  '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::editPlatformAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // _admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::indexAction',  '_route' => '_admin',);
            }

            // _account
            if ($pathinfo === '/account') {
                return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::accountAction',  '_route' => '_account',);
            }

        }

        // _business_area
        if ($pathinfo === '/businessArea') {
            return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::businessAreaAllAction',  '_route' => '_business_area',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/addB')) {
                // _add_base
                if ($pathinfo === '/addBase') {
                    return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addAirportAction',  '_route' => '_add_base',);
                }

                // _add_business_area
                if ($pathinfo === '/addBusinessArea') {
                    return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::createCustomBusinessAreaAction',  '_route' => '_add_business_area',);
                }

            }

            // _attribute_business_area
            if ($pathinfo === '/attributeBusinessArea') {
                return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::attributeBusinessAreaAction',  '_route' => '_attribute_business_area',);
            }

            if (0 === strpos($pathinfo, '/add')) {
                // _add_operator_super_groups
                if ($pathinfo === '/addGlobalGroup') {
                    return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::operatorGroupsAction',  '_route' => '_add_operator_super_groups',);
                }

                if (0 === strpos($pathinfo, '/addO')) {
                    // _add_operator_group
                    if ($pathinfo === '/addOperatorGroup') {
                        return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addOperatorGroupAction',  '_route' => '_add_operator_group',);
                    }

                    // _add_oil_company
                    if ($pathinfo === '/addOilCompany') {
                        return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addOilCompanyAction',  '_route' => '_add_oil_company',);
                    }

                }

            }

        }

        // _update_project_name
        if ($pathinfo === '/updateProjectName') {
            return array (  '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::updateProjectsNameAction',  '_route' => '_update_project_name',);
        }

        if (0 === strpos($pathinfo, '/_console/_console')) {
            // console
            if ($pathinfo === '/_console/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/_console/commands') && preg_match('#^/_console/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
