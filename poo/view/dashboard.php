<?php require_once('../controlers/quantite.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Tableau de bord</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Tableau de board</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="menu">
                            <li class="menu-item"><a href="">Enregistrer un Depot</a></li>
                            <li class="menu-item"><a href="">Enregister un Retrait</a></li>
                            <li class="menu-item"><a href="">quantite disponible en stock</a></li>
                        </ul>
                    </div>
                </div>
                <form action="../controlers/deconnection.php" method="post">
                    <button class="btn btn-success" type="submit" name="deconnection">Déconnection</button>
                </form>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <h2>Enregistrement</h2>
            <div class="col-lg-6">
                <form action="../controlers/depot.php" method="post">
                    <fieldset>
                        <legend><b>DEPOT</b></legend>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom produit</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="mb-3">
                            <label for="quantite" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="quantite" name="quantite">
                        </div>
                        <div class="mb-3">
                            <label for="magasin" class="form-label">Magasin</label>
                            <input type="number" class="form-control" id="magasin" name="numero">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="benreg">Enregistrer</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-lg-6">
                <form action="../controlers/retrait.php" method="post">
                    <fieldset>
                        <legend><b>Retrait</b></legend>
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom produit</label>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                        <div class="mb-3">
                            <label for="quantite" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="quantite" name="quantite">
                        </div>
                        <div class="mb-3">
                            <label for="magasin" class="form-label">Magasin</label>
                            <input type="number" class="form-control" id="magasin" name="numero">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="benreg">Enregistrer</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <h2>Quantité disponible en stock</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom produit</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Magasin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produits as $produit) {
                        echo "<tr>";
                        echo "<td>" . $produit['nom'] . "</td>";
                        echo "<td>" . $produit['quantité'] . "</td>";
                        echo "<td>" . $produit['num_magas'] . "</td>";
                        echo "</tr>";
                    }
                    ?>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>