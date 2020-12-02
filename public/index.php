<?php if (!@include_once('../vendor/autoload.php')) echo "You must install package to start app.";

require_once '../src/utils/Router.php';
require_once __DIR__.'/../vendor/autoload.php';
// Utilisation de l'autoload de `composer` pour inclure les dépendances et nos classes
// require_once __DIR__.'/../vendor/autoload.php';

// On créer l'objet router
$router = new Router();

// // On défini le répertoire "public" dans lequel on travail
$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', ['method' => 'home', 'controller' => 'MainController'], 'page-home');
$router->map('GET', '/experiences', ['method' => 'experience', 'controller' => 'MainController'], 'page-experience');
$router->map('GET', '/portfolio', ['method' => 'portfolio', 'controller' => 'MainController'], 'page-portfolio');

// On vérifie la route actuelle
$match = $router->match();

// Si aucune route trouvée, erreur 404
if (!$match) {
    header('HTTP/1.1 404 Not Found');
    exit('Erreur 404');
}

$methodeToUse = $match['target']['method'];
$controllerToUse = 'Portfolio\\Controllers\\' . $match['target']['controller'];

// On instancie le controlleur à utiliser
$controller = new $controllerToUse($router);
// On appelle la méthode à utiliser
$controller->$methodeToUse($match['params']);