<?php

namespace App\Controllers;

use App\Models\Job;

class JobController extends CoreController {

    public function create() {
        $this->render('job.job_create', [
            'page_title' => "Ajouter une offre"
        ]);
    }

    public function add() {
        if ($_POST) {
            $job = new Job();
            $job
                ->setName(htmlspecialchars($_POST['inputName']))
                ->setEnterprise(htmlspecialchars($_POST['inputEnterprise']))
                ->setLink(htmlspecialchars($_POST['inputLink']))
                ->setContract(htmlspecialchars($_POST['inputContract']))
                ->setSalary(htmlspecialchars($_POST['inputSalary']))
                ->setAddress(htmlspecialchars($_POST['inputAddress']))
                ->setContact(htmlspecialchars($_POST['inputContact']))
                ->setDescription(htmlspecialchars($_POST['inputDescription']))
                ->setStatut("J'ai postulé")
            ;
            $job->insert();
            die;
            $this->redirect('/');
        }
    }
}