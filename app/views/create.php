<h2>Create</h2>
<?php echo getFlash('message'); ?>

<form action="/user/store" method="post">
    <input type="text" name="name" id="" placeholder="Seu Nome">
    <?php echo getFlash('name'); ?>
    <br>
    <input type="text" name="email" id="" placeholder="Seu E-mail">
    <?php echo getFlash('email'); ?>
    <br>
    <input type="password" name="password" id="" placeholder="Sua senha">
    <?php echo getFlash('password'); ?>
    <br>
    <button>Criar Conta</button>
</form>

