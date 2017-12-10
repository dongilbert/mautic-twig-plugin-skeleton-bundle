<?php

namespace MauticPlugin\MyTwigExtensionBundle\Twig\Extension;

use Twig_Extension;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use Twig_SimpleTest;

class MyExtension extends Twig_Extension
{
    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            'reverse' => new Twig_SimpleFunction(
                'reverse',
                [$this, 'reverseString'],
                [
                    'is_safe' => ['html']
                ]
            ),
        ];
    }

    public function reverseString($arg)
    {
        return strrev($arg);
    }
}