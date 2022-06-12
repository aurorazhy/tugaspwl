<form action="<?= base_url('auth'); ?>" method="post">
   <h1>Login</h1>
   <input type="text" name="email" placeholder="Name" value="<?= set_value('email'); ?>"><br>
   <?= form_error('email', '<p>', '</p><br>'); ?>
   <input type="text" name="password" placeholder="Name"><br>
   <?= form_error('password', '<p>', '</p><br>'); ?>
   <button>Login</button><br>
   <a href="<?= base_url('auth/register/'); ?>">Create Account</a>
</form>