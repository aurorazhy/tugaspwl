<div class="contrainer-fluid mt-5">
   <div class="row ml-3">
      <div class="col-2 py-3">

         <form action="<?= base_url() . 'user/barang_add_act' ?>" method="post">
            <div class="form-group">
               <label> Nama Barang </label>
               <input type="text" name="nm" class="form-control">
               <?= form_error('nm'); ?>
            </div>
            <div class="form-group">
               <label> Harga Beli </label>
               <input type="number" name="hb" class="form-control">
            </div>
            <div class="form-group">
               <label> Harga Jual </label>
               <input type="number" name="hj" class="form-control">
            </div>
            <div class="form-group">
               <label> Qty </label>
               <input type="number" name="qty" class="form-control">
               <?= form_error('qty'); ?>
            </div>
            <!--baru-->

            <div class="form-group">
               <label> Kategori </label>
               <select class="custom-select" name="kat">
                  <option selected>-Pilih-</option>
                  <?php
                  foreach ($kategori as $k) {
                  ?>
                     <option value="<?= $k->id_kategorii ?>"><?= $k->nama_kategori ?></option>
                  <?php } ?>
               </select>
            </div>

            <!--sampe -->
            <div class="form-group">
               <button type="submit" value="" class="btn btn-appregis text-light float-right"><i class="fas fa-cart-plus"></i></button>
            </div>
         </form>
      </div>