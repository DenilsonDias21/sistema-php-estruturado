<h2>Users</h2>
<?php if(logged()): ?>
<ul id="users-home">
    <?php foreach($users as $user) { ?>
        <li><?php echo $user->name; ?> <a href="/user/<?php echo $user->iduser; ?>">Detalhes</a></li>
    <?php } ?>
</ul>
<?php else: ?>
    <p>Faça login para poder visualizar os usuários.</p>
<?php endif; ?>