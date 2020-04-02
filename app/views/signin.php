<div class="container">

    <?php
        if (isset($data['error'])) {
            echo '<div class="alert alert-danger" role="alert">';
            echo $data['error'];
            echo '</div>';
        }
    ?>

    <h2 class="text-center">Connexion</h2>
    <form action="/sign_in" method="post" class="col-6 mx-auto">
        <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Adresse email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Mot de passe">
        </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
</form>
</div>