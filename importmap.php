<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
    'onsenui' => [
        'version' => '2.12.8',
    ],
    'onsenui/css/onsen-css-components.min.css' => [
        'version' => '2.12.8',
        'type' => 'css',
    ],
    'onsenui/css/onsenui.css' => [
        'version' => '2.12.8',
        'type' => 'css',
    ],
    'ionicons' => [
        'version' => '7.2.2',
    ],
    'onsenui/css/onsenui.min.css' => [
        'version' => '2.12.8',
        'type' => 'css',
    ],
];
