<?php

return [
    'name'        => 'My Twig Extension',
    'description' => 'Enables my custom twig extension in Mautic',
    'version'     => '1.0',
    'author'      => 'Don Gilbert',
    'services' => [
        'events' => [
            // Register any event listeners
        ],
        'other' => [
            // Twig
            'templating.twig.extension.my_extension' => [
                'class'     => \MauticPlugin\MyTwigExtensionBundle\Twig\Extension\MyExtension::class,
                'arguments' => [
                    // whatever arguments
                ],
                'tag' => 'twig.extension',
            ],
        ],
    ],
];
