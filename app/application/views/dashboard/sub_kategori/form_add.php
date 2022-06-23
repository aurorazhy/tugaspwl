<div class="contrainer-fluid">
   <div class="container px-5 xy-2">
      <div class="row">
         <!-- Topbar Search -->
         <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
               <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                     <i class="fas fa-search fa-sm"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div class="row">
      <div class="col-3 offset-1 py-3">

         <form action="<?= base_url() . 'user/kategori_add_act' ?>" method="post">
            <div class="form-group">
               <label> Nama Kategori </label>
               <input type="text" name="kat" class="form-control">
               <?= form_error('kat'); ?>
            </div>
            <div class="form-group">
               <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
         </form>
      </div>