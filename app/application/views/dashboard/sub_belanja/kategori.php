            <!-- Begin Page Content -->
            <div class="container-fluid">

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

               <!-- Page Heading
               <h1 class="h3 mb-4 text-gray-800"> Blank Page </h1>-->


            </div>
            <!-- /.container-fluid -->
            <div class="container-fluid">
               <div class="container">
                  <?php foreach($kategori as $k) { ?>
                     <a class="btn btn-primary btn-lg" href="<?= base_url().'user/kategorilist/'.$k->id_kategorii ?>"><input type="hidden" name="id" value="<?= $k->id_kategorii ?>"><?= $k->nama_kategori?></a>
                  <?php } ?>
               </div>
            </div>
            <!--akhir container-->

            </div>
            <!-- End of Main Content -->