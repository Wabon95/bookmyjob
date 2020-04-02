<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends CoreController {

    public function signUp() {
        if ($_POST) {
            $user = new User();
            $user
                ->setEmail(htmlspecialchars($_POST['inputEmail']))
                ->setPassword(password_hash(htmlspecialchars($_POST['inputPassword']), PASSWORD_BCRYPT))
            ;
            $user->insert();
        } else {
            $this->render('signup', [
                'page_title' => "S'inscrire"
            ]);
        }
    }

    public function signIn() {
        if($_POST || isset($_SESSION['connectedUser'])) {
            if ($user = User::findByEmail(htmlspecialchars($_POST['inputEmail']))) {
                if (password_verify($_POST['inputPassword'], $user->getPassword())) {
                    $_SESSION['connectedUser'] = $user;
                    $this->render('home', [
                        'page_title' => "Accueil"
                    ]);
                } else {
                    $this->render('signin', [
                        'page_title' => "Se connecter",
                        'error' => "Votre mot de passe est incorrect."
                    ]);
                }
            } else {
                $this->render('signin', [
                    'page_title' => "Se connecter",
                    'error' => "Cet utilisateur n'existe pas."
                ]);
            }
        } else {
            $this->render('signin', [
                'page_title' => "Se connecter"
            ]);
        }
    }

    public function signOut() {
        if(isset($_SESSION['connectedUser'])) {
            unset($_SESSION['connectedUser']);
            $this->render('home', [
                'page_title' => "Accueil"
            ]);
        } else {
            $this->render('home', [
                'page_title' => "Accueil"
            ]);
        }
    }
}