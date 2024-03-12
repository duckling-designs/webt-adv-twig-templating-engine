<?php
namespace DucklingDesigns\WebtAdvTwigTemplatingEngine;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$loader = new FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('about.html');
