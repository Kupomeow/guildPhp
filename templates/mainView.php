<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">--| Ma Guilde |--</h1>
                <h3 class="text-center mb-5 mt-5 text-secondary">Liste des personnages de la guilde :</h3>
                <table class="shadow-lg table text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="text-info">Nom personnage</th>
                            <th scope="col" class="text-info">Job / Métier</th>
                            <th scope="col" class="text-info">Niveau</th>
                            <th scope="col" class="text-info">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                            <tr class="shadow-sm">
                                <td class="text-secondary"><?php echo $post['name']; ?></td>
                                <td class="text-secondary"><?php echo $post['job']; ?></td>
                                <td class="text-secondary"><?php echo $post['level']; ?></td>
                                <td class="shadow-sm">
                                    <a href="/mvcTraining/index.php/delete?id=<?php echo $post['id'] ?>" class="btn btn-danger">Supprimer</a> | 
                                    <a href="/mvcTraining/index.php/updateForm?id=<?php echo $post['id'] ?>" class="btn btn-primary">Modifier</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info pt-4 pb-4" data-toggle="modal" data-target="#exampleModal">
                    Ajouter un personnage
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-success" id="exampleModalLabel">Ajouter un personnage</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="/../mvcTraining/index.php/create">
                                            <div class="form-group">
                                                <label for="name" class="text-info">Votre nom :</label>
                                                <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="job" class="text-info">Votre job / métier :</label>
                                                <input type="text" class="form-control" name="job" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="level" class="text-info">Votre niveau :</label>
                                                <input type="number" class="form-control" name="level" placeholder="">
                                            </div>
                                            <button type="submit" class="btn btn-info">Ajouter !</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-ligth border" data-dismiss="modal">Annuler</button>
                            </div>
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

</html>