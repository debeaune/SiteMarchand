<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/addresses' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-mot-de-passe' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/nos-produits' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ompte/(?'
                        .'|modifier\\-une\\-adresse/([^/]++)(*:52)'
                        .'|supprimer\\-une\\-adresse/([^/]++)(*:91)'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:118)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:144)'
                            .'|crease/([^/]++)(*:167)'
                        .')'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:195)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:231)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        52 => [[['_route' => 'account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        144 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        167 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        195 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        231 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
