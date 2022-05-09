<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';

    $view = new Environment(new FilesystemLoader('templates'));
    echo $view->render('dfy.twig');