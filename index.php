<?php
require_once './vendor/autoload.php';


use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader, [
  'debug' => true,
  'defaultTemplateExtensions' => array('html', 'twig', 'html.twig'),
]);
$twig->addExtension(new DebugExtension());

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = $path === '' ? 'home' : $path;
$template = $twig->load('index.twig');
echo $template->render(['path' => $path]);

