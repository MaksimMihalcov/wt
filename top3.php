<?php
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require __DIR__ . '/vendor/autoload.php';

    $view = new Environment(new FilesystemLoader('templates'));
    $inp = file_get_contents('templates/top3.twig');

    $pattern = '/(<h[1-6] *\w*)>/i';
    $replacement = '\1 style="color: blue;">';
    $out = preg_replace($pattern, $replacement, $inp);

    $pattern = '/(<em *\w*)>/i';
    $replacement = '\1 style="color: green;">';
    $inp = preg_replace($pattern, $replacement, $out);

    $pattern = '/(<strong *\w*)>/i';
    $replacement = '\1 style="color: red;">';
    $out = preg_replace($pattern, $replacement, $inp);

    file_put_contents('templates/top3.twig', $out);
    echo $view->render('top3.twig');