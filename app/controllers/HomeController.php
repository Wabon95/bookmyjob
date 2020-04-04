<?php

namespace App\Controllers;

use App\Models\Job;

class HomeController extends CoreController {

    public function home() {
        $jobs = Job::findAll();
        $this->render('home', [
            'page_title' => 'Accueil',
            'jobs' => $jobs
        ]);
    }
}