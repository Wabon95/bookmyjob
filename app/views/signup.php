<div class="container">
    <h2>Inscription</h2>

    <form action="/user_add" method="post">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Veuillez rensigner votre adresse email">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Veuillez rensigner votre mot de passe">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>