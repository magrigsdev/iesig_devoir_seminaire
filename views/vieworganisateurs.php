<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <title>elian event</title>
</head>

<body>
<!--Main Navigation-->
<header>
    

    
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">

        <!-- Section: Main chart -->
        <!--Section: Minimal statistics cards-->
        <section class="text-capitalize">

            <div class="row text-capitalize">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-pencil-alt text-info fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>0</h3>
                                    <p class="mb-0">Organisateurs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="far fa-comment-alt text-warning fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>0</h3>
                                    <p class="mb-0">Commentaires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-rocket text-success fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>0</h3>
                                    <p class="mb-0">évenements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div class="align-self-center">
                                    <i class="fas fa-user text-info fa-3x"></i>
                                </div>
                                <div class="text-end">
                                    <h3>0</h3>
                                    <p class="mb-0">participant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success">0</h3>
                                    <p class="mb-0">intervenant</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="far fa-user text-success fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info">0</h3>
                                    <p class="mb-0">Annonces</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="far fa-life-ring text-info fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- les tableaux -->
            <!-- Organisateurs -->
            <div class="row justify-content-center mb-4">
                <p class="mb-3 text-info d-flex justify-content-left">organisateurs</p>

                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">intitulé</th>
                                <th scope="col">mise à jour</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsOrganisateurs::getAll() != false) { ?>
                                    <?php $row = 0;  foreach (ModelsOrganisateurs::getAll() as  $value) : $row = $row + 1; ?>
                                
                                        <tr>
                                            <th scope="row"> <?= $row  ?></th>
                                            <td> <?= $value['intitule_org']  ?> </td>
                                            <td> <a href="?action=org_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=org_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=org_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php  endforeach  ?>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
            </div>   
            
            <!-- commentaires -->
            <div class="row justify-content-center text-capitalize mb-4">
                <p class="mb-3 text-warning d-flex justify-content-left">commentaires</p>
                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">commentaire</th>
                                <th scope="col">mise à jour</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsCommentaire::getAll() != false) { ?>
                                    <?php $com = 0;
                                    foreach (ModelsCommentaire::getAll() as $value):
                                        $com = $com + 1; ?>
                            
                                        <tr>
                                            <th scope="row"> <?= $com ?></th>
                                            <td> <?= $value['com'] ?> </td>
                                            <td> <a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div> 

            <!-- Évenements -->
            <div class="row justify-content-center text-capitalize">
                <p class="mb-3 text-success d-flex justify-content-left">Évenements</p>
                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">type</th>
                                <th scope="col">titre</th>
                                <th scope="col">lieu</th>
                                <th scope="col">resume</th>
                                <th scope="col">organisateur</th>
                                <th scope="col">mise à jour</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsEvenement::getAll() != false) { ?>
                                    <?php $even = 0;
                                    foreach (ModelsEvenement::getAll() as $value):
                                        $even = $even + 1; ?>
                            
                                        <tr>
                                            <th scope="row"> <?= $even ?></th>
                                            <td> <?= $value['type'] ?> </td>
                                            <td> <?= $value['titre'] ?> </td>
                                            <td> <?= $value['lieu'] ?> </td>
                                            <td> <?= $value['resume'] ?> </td>
                                            <td> <?= $value['fk_id_org'] ?> </td>
                                            <td> <a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
            
             <!-- participants -->
            <div class="row justify-content-center text-capitalize">
                <p class="mb-3 text-info d-flex justify-content-left">participants</p>
                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">nom</th>
                                <th scope="col">email</th>
                                <th scope="col">mise à jour</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsParticipant::getAll() != false) { ?>
                                    <?php $part = 0;
                                    foreach (ModelsParticipant::getAll() as $value):
                                        $part = $part + 1; ?>
                            
                                        <tr>
                                            <th scope="row"> <?= $part ?></th>
                                            <td> <?= $value['nom'] ?> </td>
                                            <td> <?= $value['email'] ?> </td>
                                            <td> <a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php } ?>
                            </tbody>
                            </table>
                        </table>
                    </div>
            </div>

            <div class="row justify-content-center text-capitalize">
                <p class="mb-3 text-danger d-flex justify-content-left">Intervenant</p>
                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">affection</th>
                                    <th scope="col">url</th>
                                    <th scope="col">organisateurs</th>
                                    <th scope="col">mise à jour</th>
                                    <th scope="col">supprimer</th>
                                    <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsIntervenant::getAll() != false) { ?>
                                    <?php $inter = 0;
                                    foreach (ModelsIntervenant::getAll() as $value):
                                        $inter = $inter + 1; ?>
                            
                                        <tr>
                                            <th scope="row"> <?= $inter ?></th>
                                            <td> <?= $value['nom'] ?> </td>
                                            <td> <?= $value['prenom'] ?> </td>
                                            <td> <?= $value['affection'] ?> </td>
                                            <td> <?= $value['url'] ?> </td>
                                            <td> <?= $value['fk_id_org'] ?> </td>
                                            <td> <a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>

            <div class="row justify-content-center text-capitalize">
                <p class="mb-3 text-info d-flex justify-content-left">Annonces</p>
                    <div class="col-md-12">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">intervenant</th>
                                <th scope="col">evenement</th>
                                <th scope="col">date de l'intervention</th>
                                <th scope="col">date de mise à jour</th>
                                <th scope="col">modifier</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsIntervenant::getAll() != false) { ?>
                                    <?php $annon = 0;
                                    foreach (ModelsIntervenant::getAll() as $value):
                                        $annon = $annon + 1; ?>
                            
                                        <tr>
                                            <th scope="row"> <?= $annon ?></th>
                                            <td> <?= $value['id_inter'] ?> </td>
                                            <td> <?= $value['id_event'] ?> </td>
                                            <td> <?= $value['date_inter'] ?> </td>
                                            <td> <?= $value['date_mise_a_jour'] ?> </td>
                                            <td> <a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </section>
    
    </div>

</main>


    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

</html>