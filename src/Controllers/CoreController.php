<?php

namespace Portfolio\Controllers;

class CoreController
{
    private $router;

    // Constructeur
    public function __construct($router)
    {
        $this->router = $router;
    }

    // Affichage de nos vues
    public function show($viewName, $viewVars = [])
    {  
        // Diverses variables utiles
        $viewVars['currentPage'] = $viewName;
        $viewVars['baseUri'] = $_SERVER['BASE_URI'] .'/';    
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets/';

        // Convertir le tableau associatif en variable
        extract($viewVars);

        // Inclusion des templates
        require_once __DIR__.'/../Views/header.tpl.php';
        require_once __DIR__.'/../Views/'. $viewName .'.tpl.php';
        require_once __DIR__.'/../Views/footer.tpl.php';         
    }

    // Formater le texte pour l'utiliser dans l'url
    public function parseTextForUrl($text)
    {
        $text = trim($text, '-');
        $text = str_replace(' ', '-', $text);
        $text = str_replace('.', '', $text);
        $text = strtolower($text);

        return $text;
    }
}