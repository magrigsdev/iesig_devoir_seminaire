

           
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

             <!-- intervenants -->
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
             <!-- annonces -->
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
