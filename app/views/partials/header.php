<ul>
    <div id="menu_list">
        <li><a href="/">Home</a></li>
        <li><a href="/login">Login</a></li>
        <?php if(logged()): ?>
            <li><a href="/user/create">Create</a></li>
        <?php endif; ?>

    </div>
</ul>
<div id="status_login">
    <?php if(logged()): ?>
        <?php echo "Bem vindo, ".user()->name . " <a href='/logout'>Sair</a>"; ?>
    <?php else: ?>
        Bem vindo, visitante!
    <?php endif; ?>
</div>