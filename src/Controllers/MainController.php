<?php

namespace Portfolio\Controllers;

// on utilise la classe Formation
use Portfolio\Models\Formations;
use Portfolio\Models\User;
use Portfolio\Models\Experiences;
use Portfolio\Models\Portfolio;

class MainController extends CoreController
{
    public function home($params)
    {
        // Instanciation de la classe User
        $userModel = new User();
        // Execution de la méthode findAll
        $user = $userModel->findAll();
        
        // On executer la méthode show pour l'affichage de la page
        // home => nom de la vue (template)
        // [...] => on transmet la liste de nos personnages
        $this->show('home', ['user' => $user]);
    }

    public function experience($params)
    {
        // Instanciation de la classe Formation et Expériences
        $formationsModel = new Formations();
        $experiencesModel = new Experiences();
        
        // Execution de la méthode findAll
        $formations = $formationsModel->findAll();
        $experiences = $experiencesModel->findAll();
        // On executer la méthode show pour l'affichage de la page
        // home => nom de la vue (template)
        // [...] => on transmet la liste de nos personnages
        $this->show('experience', ['experiences' => $experiences, 'formations' => $formations]);
    }

    public function portfolio($params)
    {
        // Instanciation de la classe Character
        $portfolioModel = new Portfolio();
        // Execution de la méthode findAll
        $portfolio = $portfolioModel->findAll();
        
        // On executer la méthode show pour l'affichage de la page
        // home => nom de la vue (template)
        // [...] => on transmet la liste de nos personnages
        $this->show('portfolio', ['portfolio' => $portfolio]);
    }
}