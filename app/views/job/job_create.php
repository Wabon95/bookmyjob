<div class="container">
    <h2>Ajouter une offre</h2>
    <form action="/job_add" method="post">

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputName">Intitulé du poste</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Veuillez renseigner l'intitulé du poste">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputEnterprise">Entreprise</label>
                    <input type="text" class="form-control" id="inputEnterprise" name="inputEnterprise" placeholder="Veuillez renseigner l'entreprise">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputLink">Lien de l'offre</label>
                    <input type="text" class="form-control" id="inputLink" name="inputLink" placeholder="Veuillez renseigner le lien de l'offre">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputContract">Type de contrat</label>
                    <select class="form-control" name="inputContract" id="inputContract">
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                        <option value="Stage">Stage</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputSalary">Salaire annuel (En brut)</label>
                    <input type="number" class="form-control" id="inputSalary" name="inputSalary" aria-describedby="inputSalaryHelp" placeholder="Veuillez renseigner le salaire proposé de l'offre">
                    <small id="inputSalaryHelp" class="form-text text-muted">k € / annuel</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputAddress">Adresse</label>
                    <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Veuillez renseigner l'adresse'">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="inputContact">Contact</label>
                    <input type="text" class="form-control" id="inputContact" name="inputContact" placeholder="Veuillez renseigner le contact de l'annonce">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea class="form-control" name="inputDescription" id="inputDescription" cols="100%" rows="10" placeholder="Veuillez renseigner la description de l'offre"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'offre</button>
    </form>
</div>