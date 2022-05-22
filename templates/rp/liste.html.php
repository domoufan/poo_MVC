<div class="container">
    <h2 class="text-center border"> Liste des RP</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>nom complet</th>
            <th>login</th>
            <th>id</th>
            <th>role</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Rp as $rp) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $rp->nom_complet ?></td>
                <td><?= $rp->login ?></td>
                <td><?= $rp->id ?></td>
                <td><?= $rp->role ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>