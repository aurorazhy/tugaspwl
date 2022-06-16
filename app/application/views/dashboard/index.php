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
               <div class="d-flex flex-row">
                  <div class="">
                     <div class="d-flex flex-row">
                        <div class="card rounded-bottom p-0 ml-4" style="width: 25rem;">
                           <div class="card-body text-white bg-appside">
                              <div class="huge pr-2 text-right">0</div>
                              <h5 class="card-title">Jumlah Barang</h5>
                           </div>
                           <div class="card-body bg-appbg rounded-bottom">
                              <div class="d-flex">
                                 <a href="<?= base_url() . 'dashboard/stokbarang'; ?>" class="text-appside" style="text-decoration: none; font-size: 1.2rem;">Lihat Detail</a>
                                 <div class="ml-auto p-2"> <i class="fa-solid fa-arrow-right-long">icon</i></div>
                              </div>
                           </div>
                        </div>
                        <div class="card rounded-bottom p-0 ml-4" style="width: 25rem;">
                           <div class="card-body text-white bg-appside">
                              <div class="huge pr-2 text-right">0</div>
                              <h5 class="card-title">Jumlah Transaksi</h5>
                           </div>
                           <div class="card-body bg-appbg rounded-bottom">
                              <div class="d-flex">
                                 <a href="<?= base_url() . 'dashboard/transaksi'; ?>" class="text-appside" style="text-decoration: none; font-size: 1.2rem;">Lihat Detail</a>
                                 <div class="ml-auto p-2"> <i class="fa-solid fa-arrow-right-long">icon</i></div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="card rounded-bottom p-0 ml-4 my-4 d-flex flex-row bg-appside">
                        <img class="card-img-top" src="<?= base_url() . 'assets/img/profile/default.jpg'; ?>" style="height: 15rem; width: 15rem;" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title"><?= $user['name']; ?></h5>
                           <p class="card-text"><?= $user['email']; ?></p>
                           <p class="card-text">jadi member</p>
                        </div>
                     </div>
                  </div>

                  <div class="card rounded-bottom p-0 mx-4 mb-4">
                     <div class="card-header bg-appside text-center">
                        Catatan
                     </div>
                     <div class="card-body">
                        <textarea name="" id="" cols="70" rows="10"></textarea>
                     </div>
                  </div>
               </div>
            </div>

            </div>
            </div>

            </div>
            <!-- End of Main Content -->