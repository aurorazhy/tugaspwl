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
                              <div class="card-body text-white bg-appregis">
                                 <div class="huge text-right">0</div>
                                 <p class="card-title text-right text-appgrey">Jumlah Barang</p>
                              </div>
                              <div class="card-body bg-appgrey rounded-bottom">
                                 <a href="<?= base_url('user/stokbarang') ?>" style="text-decoration: none;">
                                    <div class="d-flex justify-content-between">
                                       <span class="text-appregis"> Lihat Detail </span>
                                       <span class="text-dark"><i class="fas fa-arrow-right"></i></span>
                                    </div>
                                 </a>
                              </div>
                           </div>

                           <div class="col-6">
                              <div class="card-body text-white bg-appregis">
                                 <div class="huge text-right">0</div>
                                 <p class="card-title text-right text-appgrey"> Jumlah Transaksi </p>
                              </div>

                              <div class="card-body bg-appgrey rounded-bottom">
                                 <a href="<?= base_url() . 'dashboard/transaksi'; ?>" style="text-decoration: none;">
                                    <div class="d-flex justify-content-between">
                                       <span class="text-appregis"> Lihat Detail </span>
                                       <span class="text-dark"><i class="fas fa-arrow-right"></i></span>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-12">
                              <div class="card rounded-bottom my-4 d-flex flex-row bg-appcard">
                                 <img class="card-img-top" src="<?= base_url() . 'assets/img/profile/default.jpg'; ?>" style="height: 15rem; width: 15rem;" alt="Card image cap">
                                 <div class="card-body m-auto">
                                    <h5 class="card-title"><?= $user['name']; ?></h5>
                                    <p class="card-text mb-1"><?= $user['email']; ?></p>
                                    <p class="card-text">jadi member</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--akhir kolom 1-->

                     <div class="col-5 ml-5">
                        <div class="card rounded-bottom bg-appgrey">
                           <div class="card-header bg-appregis text-center">
                              <h5 class="text-appgrey">Catatan</h5>
                           </div>
                           <div class="form-group p-4">
                              <textarea class="form-control" rows="12"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--akhir container-->

            </div>
            <!-- End of Main Content -->