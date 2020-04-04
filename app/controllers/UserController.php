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
        if (!$_POST && !isset($_SESSION['connectedUser'])) {
            $this->render('signin', [
                'page_title' => "Se connecter"
            ]);
        } elseif (isset($_SESSION['connectedUser'])) {
            $this->redirect('/');
        } elseif ($_POST) {
            if ($user = User::findByEmail(htmlspecialchars($_POST['inputEmail']))) {
                if (password_verify($_POST['inputPassword'], $user->getPassword())) {
                    $_SESSION['connectedUser'] = $user;
                    $this->redirect('/');
                }
            }
        }
    }

    public function signOut() {
        if(isset($_SESSION['connectedUser'])) {
            unset($_SESSION['connectedUser']);
            $this->redirect('/');
        } else {
            $this->redirect('/');
        }
    }
}