<?php
namespace DucklingDesigns\WebtAdvTwigTemplatingEngine;
use DucklingDesigns\WebtAdvTwigTemplatingEngine\Model\Hotel;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$hotels = array(
    new Hotel('Wynn', 'Schön aber teuer, auf jeden Fall fürs Frühstück hin'),
    new Hotel('Mandalay Bay', 'Ganz oben am Strip, gut und nicht so teuer'),
    new Hotel('Excalibur', 'Gehen Sie nicht ins Excalibur, ist zum Wohnen nicht so nice angeblich'),
);

$vars = ['hotels' => $hotels, 'greeting' => 'Hello, World!'];

$loader = new FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('main.html', $vars);

