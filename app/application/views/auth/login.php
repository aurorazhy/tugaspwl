<form action="<?= base_url('auth/'); ?>" method="post">
   <h1>Login</h1>
   <input type="text" name="email" placeholder="Name"><br>
   <input type="text" name="password" placeholder="Name"><br>
   <button>Login</button><br>
   <a href="<?= base_url('auth/register/'); ?>">Create Account</a>
</form>