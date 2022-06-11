<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Register</title>
</head>

<body>
      <form method="post" action="<?= base_url('auth/register/'); ?>">
            <h1>Create Account</h1>
            <input type="text" name="name" placeholder="Name"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="pass1" placeholder="Password">
            <?= form_error('pass1', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
            <input type="password" name="pass2" placeholder="Confirm Password">
            <?= form_error('pass2', '<small class="text-danger pl-3"> ', '</small>'); ?><br>
            <button type="submit">Register</button><br>
            <a href="<?= base_url('auth/kelogin/'); ?>">Login here</a>
</body>

</html>