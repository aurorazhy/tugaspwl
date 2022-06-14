<div class="container-fluid py-5 bg-appbg">
   <div class="row">
      <div class="col-6 offset-3 bg-light rounded-lg">
         <div class="col-md-6 offset-3 my-5">
            <div class="panel panel-default">
               <div class="panel-head">
                  <center>
                     <h1>Masuk</h1>
                  </center>
               </div>
               <div class="panel-body">
                  <form class="my-5" action="<?= base_url('auth'); ?>" method="post">
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby=" emailHelp">
                        <?= form_error('email', '<p>', '</p><br>'); ?>
                     </div>
                     <div class="form-group">
                        <label for="pass1">Password</label>
                        <input type="password" name="password" class="form-control mr-4" id="pass1">
                        <?= form_error('password', '<p>', '</p><br>'); ?>
                     </div>
                     <center>
                        <button type="submit" class="btn btn-appregis">Masuk</button><br>
                        Belum punya akun?<a class="btn btn-white" href="<?= base_url('auth/register/'); ?>"> Daftar disini</a>
                     </center>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>