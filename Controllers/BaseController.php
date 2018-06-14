<?php

namespace Controllers;


class BaseController
{
    protected static $twig;

    public function __construct() {
        $loader = new \Twig_Loader_Filesystem('Views');
        self::$twig = new \Twig_Environment($loader, [
            'auto_reload' => true,
            'cache' => 'CACHE'
        ]);

        self::$twig->addExtension(new \Twig_Extension_Debug());
    }

    public function render(string $fileName, array $variables = []) {
        return self::$twig->render($fileName, $variables);
    }
}