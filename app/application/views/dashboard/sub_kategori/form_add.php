<div class="contrainer-fluid mt-5">
   <div class="row">
      <div class="col-3 offset-1 py-3">

         <form action="<?= base_url() . 'user/kategori_add_act' ?>" method="post">
            <div class="form-group">
               <label> Nama Kategori </label>
               <input type="text" name="kat" class="form-control">
               <?= form_error('kat'); ?>
            </div>
            <div class="form-group">
               <input type="submit" value="Tambah" class="btn bg-appregis text-appgrey">
            </div>
         </form>
      </div>