<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change-password/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_home_default' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_home_map' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HomeBundle\\Controller\\HomeController::mapInitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/map',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contracts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contracts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contracts_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::searchAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contracts/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_initializeForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::initializeAddFormAction',    'id' => NULL,  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contracts/initializeForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::addContractAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contracts/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::editContractAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/contracts/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::showContractDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contracts/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_detail_map' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::initializeMapAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/map',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/contracts/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_comment_add' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::addCommentAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addComment',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/contracts/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_helicopter_find' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::findHelicopterFilteredAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/findHelicopterFiltered',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_archive' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::archiveAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projects/detail/archive',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_contract_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::deleteAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_projects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_projects_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::searchAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_project_initializeForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::initializeAddFormAction',    'id' => NULL,  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projects/initializeForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_projects_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::addProjectAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_project_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::editProjectAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/projects/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_project_upgrade' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::upgradeProjectAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upgrade',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/projects/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_project_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::showProjectDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/projects/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_project_detail_map' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::initializeMapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/map',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/projects/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tenders' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tenders',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tenders_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::searchAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tenders/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tender_initializeForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::initializeAddFormAction',    'id' => NULL,  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tenders/initializeForm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tenders_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::addTenderAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tenders/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tender_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::editTenderAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tenders/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tender_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::showTenderDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tenders/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_tender_upgrade' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\TenderController::upgradeTenderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upgrade',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tenders/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_bases' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ProjectController::searchBasesAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects/bases',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_platforms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\ContractController::searchPlatformsAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects/platforms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_base' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AircraftBundle\\Controller\\BaseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aircraft/base',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_fleet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AircraftBundle\\Controller\\HelicopterController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aircraft/fleet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_operator' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AircraftBundle\\Controller\\OperatorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aircraft/operator',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_oilCompany' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\OilCompanyController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oilActivity/oilCompany',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_oilCountry' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\OilCountryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oilActivity/oilCountries',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_platforms' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/oilActivity/platforms',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_platform_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::platformDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/oilActivity/platforms/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_platform_detail_map' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::platformDetailMapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/map',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/oilActivity/platforms/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_platform_initialize_form' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::initializeEditPlatformFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/initializeEditForm',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/oilActivity/platforms/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_platform_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OilIndustryBundle\\Controller\\PlatformsController::editPlatformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/oilActivity/platforms/details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::accountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_business_area' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::businessAreaAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/businessArea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_base' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addAirportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addBase',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_business_area' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::createCustomBusinessAreaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addBusinessArea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_attribute_business_area' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::attributeBusinessAreaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/attributeBusinessArea',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_operator_super_groups' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::operatorGroupsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addGlobalGroup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_operator_group' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addOperatorGroupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addOperatorGroup',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_add_oil_company' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::addOilCompanyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addOilCompany',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_update_project_name' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminToolsBundle\\Controller\\AdminToolsController::updateProjectsNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updateProjectName',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
