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
                                        <i class="fas fa-rocket text-success fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3></h3>
                                        <p class="mb-0"><?= ModelsIntervenant::getOne($_GET['id']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- les tableaux -->

                <!-- Évenements -->
                <div class="row justify-content-center text-capitalize">
                     <div class="justify-content-left mb-2"><a href="?" class="btn btn-danger col-md-2 d-flex ">Back</a>  </div>
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
                                    <!-- <th scope="col">organisateur</th>
                                <th scope="col">mise à jour</th>
                                <th scope="col">supprimer</th>
                                <th scope="col">nouveau</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (ModelsIntervenant::getEventByInter($_GET['id']) != false) { ?>
                                    <?php $evenby = 0;
                                    foreach (ModelsIntervenant::getEventByInter($_GET['id']) as $events):
                                        $evenby = $evenby + 1; ?>

                                        <tr>
                                            <th scope="row"> <?= $evenby ?></th>
                                            <td> <?= $events['type_event'] ?> </td>
                                            <td> <?= $events['titre'] ?> </td>
                                            <td> <?= $events['lieu'] ?> </td>
                                            <td> <?= $events['resume'] ?> </td>
                                            
                                            <!-- <td> <?= $value['fk_id_org'] ?> </td>
                                            <td><a href="?action=com_update"> <i class="fas fa-pencil-alt"></i></a></td>
                                            <td><a href="?action=com_del"> <i class="fas fa-trash"></i></a></td>
                                            <td><a href="?action=com_new"> <i class="fas fa-plus"></i></a></td> -->
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