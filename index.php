<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';
require 'Article.php';
require  'DBProvider.php';

    $prov = new DBProvider();
    $view = new Environment(new FilesystemLoader('templates'));
    echo $view->render('base.twig');
    echo $view->render('index.twig', ['articles' => $prov->getAll()]);