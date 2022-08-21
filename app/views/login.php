<h2>Login</h2>
<?php echo getFlash('message'); ?>
<div id="box-login">

<form action="/login" method="post">
    <input type="text" name="email" id="" placeholder="Seu E-mail">
    <?php echo getFlash('email'); ?>
    <input type="password" name="password" id="" placeholder="Sua senha">
    <?php echo getFlash('password'); ?>
    <button>Login</button>
</form>
</div>
