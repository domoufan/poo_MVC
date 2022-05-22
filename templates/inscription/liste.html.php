<div class="container">
    <h2 class="text-center border"> Liste des inscriptions</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($inscription as $inscription) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $inscription->libelle ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>