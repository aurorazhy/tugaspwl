<div class="container bg-appbg py-5">
   <div class="container bg-appbg py-4"></div>
   <!-- Outer Row -->
   <div class="row justify-content-center">
      <div class="col-lg-6">
         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                  <div class="col-lg">
                     <div class="p-5">
                        <div class="text-center">
                           <h1 class="h4 text-gray-900 mb-4">Halaman Masuk</h1>
                        </div>
                        <div class="form-group px-4 mx-4">
                           <?= $this->session->flashdata('message'); ?>
                        </div>
                        <form action="<?= base_url('auth'); ?>" method="post">
                           <div class="form-group px-4 mx-4">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control bg-white" id="email" value="<?= set_value('email'); ?>" aria-describedby=" emailHelp">
                              <small class="text-danger"><?= form_error('email', '<p>', '</p>'); ?></small>
                           </div>
                           <div class="form-group px-4 mx-4">
                              <label for="pass1">Password</label>
                              <input type="password" name="password" class="form-control mr-4" id="pass1">
                              <small class="text-danger"><?= form_error('password', '<p>', '</p>'); ?></small>
                           </div>
                           <div class="text-center">
                              <div class="row py-3">
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-appregis text-light px-5 py-2">Masuk</button>
                                 </div>
                              </div>
                              <div class="row align-items-center">
                                 <div class="col-6 text-end">Belum punya akun?</div>
                                 <div class="col-6 text-start">
                                    <a class="btn btn-white" href="<?= base_url('auth/register/'); ?>"> Daftar disini</a>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>