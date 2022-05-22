<div class="container">
    <h2 class="text-center border"> Liste des classes</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Effectif</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Classe as $classe) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $classe->libelle ?></td>
                <td><?= $classe->effectif ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>