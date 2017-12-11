<?php

return [
    'name'        => 'Mautic Twig Plugin Skeleton',
    'description' => 'Skeleton bundle to use as a reference when writing your own Twig plugin for Mautic.',
    'version'     => '1.0',
    'author'      => 'Don Gilbert',
    'services' => [
        'events' => [
            // Register any event listeners
        ],
        'other' => [
            // Twig
            'templating.twig.extension.my_extension' => [
                'class'     => \MauticPlugin\MauticTwigExtensionBundle\Twig\Extension\MyExtension::class,
                'arguments' => [
                    // whatever arguments
                ],
                'tag' => 'twig.extension',
            ],
        ],
    ],
];
