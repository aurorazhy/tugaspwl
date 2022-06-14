<form action="<?= base_url('auth'); ?>" method="post">
   <h1>Login</h1>
   <input type="text" name="email" placeholder="Name" value="<?= set_value('email'); ?>"><br>
   <?= form_error('email', '<p>', '</p><br>'); ?>
   <input type="password" name="password" placeholder="Name" id="password"><br>
   <?= form_error('password', '<p>', '</p><br>'); ?>
   <button class="btn btn-a" type="submit">Login</button><br>
   <a href="<?= base_url('auth/register/'); ?>">Create Account</a>
</form>