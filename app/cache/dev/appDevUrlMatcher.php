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

        if (0 === strpos($pathinfo, '/js/35a8e64')) {
            // _assetic_35a8e64
            if ($pathinfo === '/js/35a8e64.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_35a8e64',);
            }

            // _assetic_35a8e64_0
            if ($pathinfo === '/js/35a8e64_comments_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '35a8e64',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_35a8e64_0',);
            }

        }

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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/investissementpe')) {
            // investissementpe
            if (rtrim($pathinfo, '/') === '/investissementpe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'investissementpe');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::indexAction',  '_route' => 'investissementpe',);
            }

            // investissementpe_show
            if (preg_match('#^/investissementpe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'investissementpe_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::showAction',));
            }

            // investissementpe_new
            if ($pathinfo === '/investissementpe/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::newAction',  '_route' => 'investissementpe_new',);
            }

            // investissementpe_create
            if ($pathinfo === '/investissementpe/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_investissementpe_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::createAction',  '_route' => 'investissementpe_create',);
            }
            not_investissementpe_create:

            // investissementpe_edit
            if (preg_match('#^/investissementpe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'investissementpe_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::editAction',));
            }

            // investissementpe_update
            if (preg_match('#^/investissementpe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_investissementpe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'investissementpe_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::updateAction',));
            }
            not_investissementpe_update:

            // investissementpe_delete
            if (preg_match('#^/investissementpe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_investissementpe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'investissementpe_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::deleteAction',));
            }
            not_investissementpe_delete:

            if (0 === strpos($pathinfo, '/investissementpe/financer')) {
                // financerProjet
                if (0 === strpos($pathinfo, '/investissementpe/financerProjet') && preg_match('#^/investissementpe/financerProjet/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financerProjet')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::financerProjetAction',));
                }

                // financerEvenement
                if (0 === strpos($pathinfo, '/investissementpe/financerEvenement') && preg_match('#^/investissementpe/financerEvenement/(?P<idE>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financerEvenement')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\InvestissementPEController::financerEvenementAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/categorieevenement')) {
            // categorieevenement
            if (rtrim($pathinfo, '/') === '/categorieevenement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorieevenement');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::indexAction',  '_route' => 'categorieevenement',);
            }

            // categorieevenement_show
            if (preg_match('#^/categorieevenement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieevenement_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::showAction',));
            }

            // categorieevenement_new
            if ($pathinfo === '/categorieevenement/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::newAction',  '_route' => 'categorieevenement_new',);
            }

            // categorieevenement_create
            if ($pathinfo === '/categorieevenement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorieevenement_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::createAction',  '_route' => 'categorieevenement_create',);
            }
            not_categorieevenement_create:

            // categorieevenement_edit
            if (preg_match('#^/categorieevenement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieevenement_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::editAction',));
            }

            // categorieevenement_update
            if (preg_match('#^/categorieevenement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorieevenement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieevenement_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::updateAction',));
            }
            not_categorieevenement_update:

            // categorieevenement_delete
            if (preg_match('#^/categorieevenement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorieevenement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieevenement_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\CategorieEvenementController::deleteAction',));
            }
            not_categorieevenement_delete:

        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // evenement
            if (rtrim($pathinfo, '/') === '/evenement') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evenement');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement',);
            }

            // evenement_show
            if (preg_match('#^/evenement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::showAction',));
            }

            // evenement_new
            if ($pathinfo === '/evenement/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
            }

            // evenement_create
            if ($pathinfo === '/evenement/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evenement_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
            }
            not_evenement_create:

            // evenement_edit
            if (preg_match('#^/evenement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::editAction',));
            }

            // evenement_update
            if (preg_match('#^/evenement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_evenement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::updateAction',));
            }
            not_evenement_update:

            // evenement_delete
            if (preg_match('#^/evenement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_evenement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::deleteAction',));
            }
            not_evenement_delete:

            // catEv
            if (0 === strpos($pathinfo, '/evenement/catev') && preg_match('#^/evenement/catev/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'catEv')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\EvenementController::catAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reclamation')) {
            // reclamation
            if (rtrim($pathinfo, '/') === '/reclamation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reclamation');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation',);
            }

            // reclamation_show
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::showAction',));
            }

            // reclamation_new
            if ($pathinfo === '/reclamation/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::newAction',  '_route' => 'reclamation_new',);
            }

            // reclamation_create
            if ($pathinfo === '/reclamation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reclamation_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::createAction',  '_route' => 'reclamation_create',);
            }
            not_reclamation_create:

            // reclamation_edit
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::editAction',));
            }

            // reclamation_update
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_reclamation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::updateAction',));
            }
            not_reclamation_update:

            // reclamation_delete
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_reclamation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ReclamationController::deleteAction',));
            }
            not_reclamation_delete:

        }

        if (0 === strpos($pathinfo, '/solution')) {
            // solution
            if (rtrim($pathinfo, '/') === '/solution') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solution');
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::indexAction',  '_route' => 'solution',);
            }

            // solution_show
            if (preg_match('#^/solution/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::showAction',));
            }

            // solution_new
            if ($pathinfo === '/solution/new') {
                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::newAction',  '_route' => 'solution_new',);
            }

            // solution_create
            if ($pathinfo === '/solution/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_solution_create;
                }

                return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::createAction',  '_route' => 'solution_create',);
            }
            not_solution_create:

            // solution_edit
            if (preg_match('#^/solution/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::editAction',));
            }

            // solution_update
            if (preg_match('#^/solution/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_solution_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::updateAction',));
            }
            not_solution_update:

            // solution_delete
            if (preg_match('#^/solution/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_solution_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::deleteAction',));
            }
            not_solution_delete:

            // solpro
            if (0 === strpos($pathinfo, '/solution/solu') && preg_match('#^/solution/solu/(?P<sol>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solpro')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::solByidAction',));
            }

            // solution_ajouter
            if (preg_match('#^/solution/(?P<id>[^/]++)/ajouter$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solution_ajouter')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\SolutionController::ajoutAction',));
            }

        }

        if (0 === strpos($pathinfo, '/pro')) {
            if (0 === strpos($pathinfo, '/probleme')) {
                // probleme
                if (rtrim($pathinfo, '/') === '/probleme') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'probleme');
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::indexAction',  '_route' => 'probleme',);
                }

                // probleme_show
                if (preg_match('#^/probleme/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'probleme_show')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::showAction',));
                }

                if (0 === strpos($pathinfo, '/probleme/new')) {
                    // probleme_new2
                    if ($pathinfo === '/probleme/new2') {
                        return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::new2Action',  '_route' => 'probleme_new2',);
                    }

                    // probleme_new
                    if ($pathinfo === '/probleme/new') {
                        return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::newAction',  '_route' => 'probleme_new',);
                    }

                }

                // probleme_ajout
                if ($pathinfo === '/probleme/ajout') {
                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::ajoutAction',  '_route' => 'probleme_ajout',);
                }

                // probleme_create
                if ($pathinfo === '/probleme/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_probleme_create;
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::createAction',  '_route' => 'probleme_create',);
                }
                not_probleme_create:

                // probleme_edit
                if (preg_match('#^/probleme/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'probleme_edit')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::editAction',));
                }

                // probleme_update
                if (preg_match('#^/probleme/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_probleme_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'probleme_update')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::updateAction',));
                }
                not_probleme_update:

                // probleme_delete
                if (preg_match('#^/probleme/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_probleme_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'probleme_delete')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::deleteAction',));
                }
                not_probleme_delete:

                // probleme_recherche_comp
                if ($pathinfo === '/probleme/recherche_comp') {
                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::rechercheCompAction',  '_route' => 'probleme_recherche_comp',);
                }

                // comFr
                if (0 === strpos($pathinfo, '/probleme/competence') && preg_match('#^/probleme/competence/(?P<com>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comFr')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::comAction',));
                }

                // typePr
                if (0 === strpos($pathinfo, '/probleme/probleme') && preg_match('#^/probleme/probleme/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typePr')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\ProblemeController::typeAction',));
                }

            }

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

                if (0 === strpos($pathinfo, '/admin/afficher_')) {
                    // afficher_All_User
                    if (rtrim($pathinfo, '/') === '/admin/afficher_All_User') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'afficher_All_User');
                        }

                        return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::afficher_All_UserAction',  '_route' => 'afficher_All_User',);
                    }

                    // afficher_all_projet
                    if (rtrim($pathinfo, '/') === '/admin/afficher_all_projet') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'afficher_all_projet');
                        }

                        return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::afficher_all_projetAction',  '_route' => 'afficher_all_projet',);
                    }

                }

                // block_user
                if (0 === strpos($pathinfo, '/admin/block_user') && preg_match('#^/admin/block_user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'block_user')), array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::block_userAction',));
                }

                // statistique_Projet
                if (rtrim($pathinfo, '/') === '/admin/statistique_Projet') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'statistique_Projet');
                    }

                    return array (  '_controller' => 'crowd\\crowdBundle\\Controller\\adminController::statistique_ProjetAction',  '_route' => 'statistique_Projet',);
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

        // ccdn_forum_admin_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminPanelController::IndexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_forum_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/edit/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_forum_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-forums/delete/(?P<forumId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_forum_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminForumController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_category_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/edit/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/delete/(?P<categoryId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_category_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_category_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-categories/reorder/(?P<categoryId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_category_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminCategoryController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_admin_board_list
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_admin_board_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_list')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::listAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/create/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::createProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/edit/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::editProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/delete/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::deleteProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_admin_board_reorder_up
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/up$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_up')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 0,));
        }

        // ccdn_forum_admin_board_reorder_down
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/admin/manage\\-boards/reorder/(?P<boardId>[^/]++)/down$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_admin_board_reorder_down')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\AdminBoardController::reorderAction',  '_locale' => 'en',  'direction' => 1,));
        }

        // ccdn_forum_moderator_topic_close
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/close$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_close')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::closeAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_reopen
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/reopen$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_reopen')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::reopenAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_sticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/sticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_sticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::stickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_unsticky
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/unsticky$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_unsticky')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::unstickyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::restoreAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_topic_change_board_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-topics/(?P<topicId>[^/]++)/change\\-board/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_topic_change_board_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorTopicController::changeBoardProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_moderator_post_lock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/lock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_lock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::lockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_unlock_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/unlock/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_unlock_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::unlockProcessAction',  '_locale' => 'en',));
        }

        // ccdn_forum_moderator_post_restore
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/moderator/manage\\-posts/(?P<postId>[^/]++)/restore$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_moderator_post_restore')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\ModeratorPostController::restoreAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_category_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum(?:/(?P<forumName>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::indexAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_category_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/category/(?P<categoryId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_category_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserCategoryController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_board_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_board_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserBoardController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_create_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/create/for\\-board/(?P<boardId>[^/]++)/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_create_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::createProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_topic_reply_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/topic/(?P<topicId>[^/]++)/reply/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_topic_reply_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserTopicController::replyProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_show
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_show')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::showAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_edit_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/edit/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_edit_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::editProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_post_delete_process
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/post/(?P<postId>[^/]++)/delete/process$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_post_delete_process')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserPostController::deleteProcessAction',  '_locale' => 'en',  'forumName' => 'default',));
        }

        // ccdn_forum_user_subscription_index
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ccdn_forum_user_subscription_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_index')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::indexAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_subscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/subscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_subscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::subscribeAction',  '_locale' => 'en',));
        }

        // ccdn_forum_user_subscription_unsubscribe
        if (preg_match('#^/(?P<_locale>[^/]++)/forum/(?P<forumName>[^/]++)/subscription/topic/(?P<topicId>[^/]++)/unsubscribe$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ccdn_forum_user_subscription_unsubscribe')), array (  '_controller' => 'CCDNForum\\ForumBundle\\Controller\\UserSubscriptionController::unsubscribeAction',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_remove_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_remove_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_edit_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_edit_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_new_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions',  '_format' => 'html',));
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_threads;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_threads')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_commentable')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_patch_thread_comment_state')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction',  '_format' => 'html',));
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fos_comment_put_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_put_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comments;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comments')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_get_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_comment_post_thread_comment_votes')), array (  '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction',  '_format' => 'html',));
            }
            not_fos_comment_post_thread_comment_votes:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
