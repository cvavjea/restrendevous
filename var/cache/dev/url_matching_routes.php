<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'agent_index', '_controller' => 'App\\Controller\\AgentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agent/new' => [[['_route' => 'agent_new', '_controller' => 'App\\Controller\\AgentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendrier' => [[['_route' => 'calendrier_index', '_controller' => 'App\\Controller\\CalendrierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendrier/new' => [[['_route' => 'calendrier_new', '_controller' => 'App\\Controller\\CalendrierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commisariat' => [[['_route' => 'commisariat_index', '_controller' => 'App\\Controller\\CommisariatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commisariat/new' => [[['_route' => 'commisariat_new', '_controller' => 'App\\Controller\\CommisariatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::inscriptionAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'template', '_controller' => 'App\\Controller\\TemplateController::index'], null, null, null, false, false, null]],
        '/navbar' => [[['_route' => 'navbar', '_controller' => 'App\\Controller\\TemplateController::topbar'], null, null, null, false, false, null]],
        '/asidebar' => [[['_route' => 'asidebar', '_controller' => 'App\\Controller\\TemplateController::asidebar'], null, null, null, false, false, null]],
        '/footerbar' => [[['_route' => 'footerbar', '_controller' => 'App\\Controller\\TemplateController::footerbar'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/cncb/trasporter' => [[['_route' => 'cncb_transpoter', '_controller' => 'App\\Controller\\UserController::getCncb'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|gent/([^/]++)(?'
                        .'|(*:190)'
                        .'|/edit(*:203)'
                        .'|(*:211)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:253)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:284)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:320)'
                            .'|images(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:355)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:393)'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:429)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:467)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|alendrier/([^/]++)(?'
                        .'|(*:506)'
                        .'|/edit(*:519)'
                        .'|(*:527)'
                    .')'
                    .'|ommisariat/([^/]++)(?'
                        .'|(*:558)'
                        .'|/edit(*:571)'
                        .'|(*:579)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:606)'
                    .'|/edit(*:619)'
                    .'|(*:627)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'agent_show', '_controller' => 'App\\Controller\\AgentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'agent_edit', '_controller' => 'App\\Controller\\AgentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        253 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        284 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        320 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        355 => [
            [['_route' => 'api_images_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        393 => [
            [['_route' => 'api_images_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_images_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_images_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        429 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        467 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        506 => [[['_route' => 'calendrier_show', '_controller' => 'App\\Controller\\CalendrierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        519 => [[['_route' => 'calendrier_edit', '_controller' => 'App\\Controller\\CalendrierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        527 => [[['_route' => 'calendrier_delete', '_controller' => 'App\\Controller\\CalendrierController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        558 => [[['_route' => 'commisariat_show', '_controller' => 'App\\Controller\\CommisariatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        571 => [[['_route' => 'commisariat_edit', '_controller' => 'App\\Controller\\CommisariatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        579 => [[['_route' => 'commisariat_delete', '_controller' => 'App\\Controller\\CommisariatController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        606 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        619 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        627 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
