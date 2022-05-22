<div class="container">
    <h2 class="text-center border"> Liste des ac</h2>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>nom complet</th>
            <th>login</th>
            <th>Actions</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($Acs as $acs) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $acs->nom_complet ?></td>
                <td><?= $acs->login ?></td>
                <td><?= "action" ?></td>
            </tr><br>
        <?php } ?>
    </table>
</div>