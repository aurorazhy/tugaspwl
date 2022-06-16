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
                  <div class="row">
                     <div class="col-6 ml-4">
                        <div class="row">
                           <div class="col-6">
                              <div class="card-body text-white bg-appside">
                                 <div class="huge pr-2 text-right">0</div>
                                 <p class="card-title text-right">Jumlah Barang</p>
                              </div>
                              <div class="card-body bg-appbg rounded-bottom">
                                 <div class="d-flex">
                                    <a href="<?= base_url() . 'dashboard/stokbarang'; ?>" class="text-appside" style="text-decoration: none;">Lihat Detail</a>
                                    <div class="ml-auto"><i class="fas fa-arrow-right"></i></div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-6">
                              <div class="card-body text-white bg-appside">
                                 <div class="huge pr-2 text-right">0</div>
                                 <p class="card-title text-right">Jumlah Transaksi</p>
                              </div>
                              <div class="card-body bg-appbg rounded-bottom">
                                 <div class="d-flex">
                                    <a href="<?= base_url() . 'dashboard/transaksi'; ?>" class="text-appside" style="text-decoration: none;">Lihat Detail</a>
                                    <div class="ml-auto"><i class="fas fa-arrow-right"></i></div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-12">
                              <div class="card rounded-bottom my-4 d-flex flex-row bg-appside">
                                 <img class="card-img-top" src="<?= base_url() . 'assets/img/profile/default.jpg'; ?>" style="height: 15rem; width: 15rem;" alt="Card image cap">
                                 <div class="card-body">
                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                    <p class="card-text"><?= $user['email']; ?></p>
                                    <p class="card-text">jadi member</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--akhir kolom 1-->

                     <div class="col-5 ml-5">
                        <div class="card rounded-bottom">
                           <div class="card-header bg-appside text-center">
                              Catatan
                           </div>
                           <div class="card-body">
                              <textarea name="" id="" cols="10" rows="10"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--akhir container-->



            </div>
            </div>

            </div>
            <!-- End of Main Content -->