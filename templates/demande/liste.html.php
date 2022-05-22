<div class="container">
    <h2 class="text-center border"> Liste des demandes</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Adresse</th>
            <th>Motif</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($demande as $demande) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $demande->libelle ?></td>
                <td><?= $demande->adresse ?></td>
                <td><?= $demande->motif ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>