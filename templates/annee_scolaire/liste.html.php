<div class="container">
    <h2 class="text-center border"> Liste des AnneeScolaire</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Etat</th>
            <th>Actions</th>
        </tr>
        
        <?php $i = 0; ?>
        <?php foreach ($An as $an) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $an->libelle ?></td>
                <td><?= $an->etat ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>