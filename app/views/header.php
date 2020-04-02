<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
    <title><?= $data['page_title'] ?></title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <a class="navbar-brand" href="/">BookMyJob</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Mes candidatures bookées</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['connectedUser'])): ?> 
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">Mon profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sign_out">Se déconnecter</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/sign_up">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sign_in">Se connecter</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>