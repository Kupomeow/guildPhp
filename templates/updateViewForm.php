<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">--| Ma Guilde |--</h1>
                <h3 class="text-center mb-5 mt-5 text-secondary">Modification du personnage : <?= $charact['name'] ?></h3>
                <div class="row justify-content-md-center">
                    <div class="col-md-4 text-center shadow-lg p-5">
                        <form method="post" action="/../mvcTraining/index.php/updatePersonnage">
                            <div class="form-group">
                                <label for="name" class="text-info">Votre nom :</label>
                                <input type="text" class="form-control" name="name" aria-describedby="nameHelp" value="<?php echo $charact['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="job" class="text-info">Votre job / métier :</label>
                                <input type="text" class="form-control" name="job" value="<?php echo $charact['job'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="level" class="text-info">Votre niveau :</label>
                                <input type="number" class="form-control" name="level" value="<?php echo $charact['level'] ?>">
                            </div>
                            <input type="hidden" name="id" value="<?= $charact['id'] ?>">
                            <button type="submit" class="btn btn-info">Modifier !</button>
                        </form>
                        <a href="/../mvcTraining/index.php" class="btn btn-light">Retour</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>