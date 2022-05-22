<div class="container">
    <h2 class="text-center border"> Liste des Modules</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Libelle</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Module as $module) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $module->libelle ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>