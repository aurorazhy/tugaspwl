<div class="contrainer-fluid mt-5">
   <div class="row ml-5">
      <div class="col-2 py-3">
         <?php foreach ($barang as $b) { ?>
            <form action="<?= base_url() . 'user/barang_edit_act' ?>" method="post">
               <div class="form-group">
                  <label> Nama Barang </label>
                  <input type="hidden" name="id" value="<?= $b->id_barang  ?>">
                  <input type="text" name="nm" class="form-control" value="<?= $b->nama_barang  ?>">
                  <?= form_error('nm'); ?>
               </div>
               <div class="form-group">
                  <label> Harga Beli </label>
                  <input type="number" name="hb" class="form-control" value="<?= $b->harga_beli ?>">
               </div>
               <div class="form-group">
                  <label> Harga Jual </label>
                  <input type="number" name="hj" class="form-control" value="<?= $b->harga_jual  ?>">
               </div>
               <div class="form-group">
                  <label> Qty </label>
                  <input type="number" name="qty" class="form-control" value="<?= $b->qty  ?>">
                  <?= form_error('qty'); ?>
               </div>

               <div class="form-group">
                  <label> Kategori </label>
                  <select class="custom-select" name="kat">
                     <option selected>-Pilih-</option>
                     <?php
                     foreach ($kategori as $k) {
                     ?>
                        <option <?php if ($b->id_kategori == $k->id_kategorii) {
                                    echo "selected ='selected'";
                                 } ?> value="<?= $k->id_kategorii ?>"><?= $k->nama_kategori ?></option>
                     <?php } ?>
                  </select>
               </div>

               <div class="form-group">
                  <input type="submit" value="Update" class="btn bg-appregis text-appgrey">
               </div>
            </form><?php } ?>
      </div>