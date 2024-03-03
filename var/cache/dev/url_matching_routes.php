<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/consultation/telecons' => [[['_route' => 'app_consultation_telecons', '_controller' => 'App\\Controller\\ConsultationController::telecons'], null, ['GET' => 0], null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/docteur' => [[['_route' => 'app_docteur', '_controller' => 'App\\Controller\\DocteurController::index'], null, null, null, false, false, null]],
        '/dossiermedical' => [[['_route' => 'app_dossiermedical_index', '_controller' => 'App\\Controller\\DossiermedicalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dossiermedical/new' => [[['_route' => 'app_dossiermedical_new', '_controller' => 'App\\Controller\\DossiermedicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::indexb'], null, null, null, false, false, null]],
        '/homeb' => [[['_route' => 'app_homeb', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/sign' => [[['_route' => 'app_sign_home', '_controller' => 'App\\Controller\\HomeController::sing'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about_home', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/news' => [[['_route' => 'app_news_home', '_controller' => 'App\\Controller\\HomeController::news'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service_home', '_controller' => 'App\\Controller\\HomeController::service'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_home', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/local' => [[['_route' => 'app_local', '_controller' => 'App\\Controller\\LocalController::index'], null, null, null, false, false, null]],
        '/patient' => [[['_route' => 'app_patient', '_controller' => 'App\\Controller\\PatientController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/consultation/([^/]++)(?'
                    .'|(*:32)'
                    .'|/edit(*:44)'
                    .'|(*:51)'
                .')'
                .'|/dossiermedical/(?'
                    .'|dossiermedical/([^/]++)(*:101)'
                    .'|([^/]++)(?'
                        .'|/edit(*:125)'
                        .'|(*:133)'
                    .')'
                    .'|statistics(*:152)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:192)'
                    .'|wdt/([^/]++)(*:212)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:258)'
                            .'|router(*:272)'
                            .'|exception(?'
                                .'|(*:292)'
                                .'|\\.css(*:305)'
                            .')'
                        .')'
                        .'|(*:315)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        101 => [[['_route' => 'app_dossiermedical_show', '_controller' => 'App\\Controller\\DossiermedicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_dossiermedical_edit', '_controller' => 'App\\Controller\\DossiermedicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_dossiermedical_delete', '_controller' => 'App\\Controller\\DossiermedicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        152 => [[['_route' => 'dossier_medical_statistics', '_controller' => 'App\\Controller\\DossiermedicalController::statistics'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        192 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        212 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        258 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        272 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        315 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
