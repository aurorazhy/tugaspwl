            <!-- Begin Page Content -->
            <!-- /.container-fluid -->
            <div class="container-fluid mt-5">
               <div class="container">
                  <div class="row">
                     <div class="col-3 ml-5 bg-appcard rounded">
                        <div class="p-2 my-2">
                           <?php foreach ($kategori as $k) { ?>
                              <a class="btn bg-appside btn-lg m-1" href="<?= base_url() . 'user/kategorilist/' . $k->id_kategorii ?>"><input type="hidden" name="id" value="<?= $k->id_kategorii ?>"><?= $k->nama_kategori ?></a>
                           <?php } ?>
                        </div>
                        <!--akhir container-->
                     </div>