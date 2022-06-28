<div class="contrainer-fluid mt-5">
   <div class="row">
      <div class="col-3 offset-1 py-3">
         <?php foreach ($kategori as $k) { ?>
            <form action="<?= base_url() . 'user/kategori_edit_act' ?>" method="post">
               <div class="form-group">
                  <label> Nama Kategori </label>
                  <input type="hidden" name="id" value="<?= $k->id_kategorii ?>">
                  <input type="text" name="kat" class="form-control" value="<?= $k->nama_kategori ?>">
                  <?= form_error('kat') ?>
               </div>
               <div class="form-group">
                  <input type="submit" value="Simpan" class="btn bg-appregis text-appgrey">
               </div>
            <?php } ?>
            </form>
      </div>