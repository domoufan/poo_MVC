<div class="container">
    <h2 class="text-center border"> Liste des etudiants</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>nom complet</th>
            <th>login</th>
            <th>id</th>
            <th>matricule</th>
            <th>sexe</th>
            <th>adresse</th>
            <th>role</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Etudiant as $etudiant) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $etudiant->nom_complet ?></td>
                <td><?= $etudiant->login ?></td>
                <td><?= $etudiant->id ?></td>
                <td><?= $etudiant->matricule ?></td>
                <td><?= $etudiant->sexe ?></td>
                <td><?= $etudiant->adresse ?></td>
                <td><?= $etudiant->role ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>