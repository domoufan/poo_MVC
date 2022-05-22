<div class="container">
    <h2 class="text-center  display-4"> Liste des professeurs</h2>

    <table class="table table-bordered text-center ">
        <tr>
            <th>#</th>
            <th>nom complet</th>
            <th>grade</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Profs as $profs) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $profs->nom_complet ?></td>
                <td><?= $profs->grade ?></td>
                <td>
                    <button class="btn btn-primary">Ajouter</button>
                    <button class="btn btn-dark ft-danger">Modifier</button>
                    <button class="btn btn-danger">Supprimer</button>
                </td>
            </tr><br>
        <?php } ?>
    </table>
</div>