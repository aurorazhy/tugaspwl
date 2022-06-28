            <!-- Begin Page Content -->
            <!-- /.container-fluid -->
            <div class="container-fluid mt-5">
               <div class="container">
                  <div class="row">
                     <div class="col-6 ml-4">
                        <div class="row">
                           <div class="col-6">
                              <div class="card-body text-white bg-appregis">
                                 <div class="huge text-right"><?php foreach ($brg as $br) {
                                                                  echo $br->barangnya;
                                                               } ?></div>
                                 <p class="card-title text-right text-appgrey">Jumlah Barang</p>
                              </div>
                              <div class="card-body bg-appgrey rounded-bottom">
                                 <a href="<?= base_url('user/barangtable') ?>" style="text-decoration: none;">
                                    <div class="d-flex justify-content-between">
                                       <span class="text-appregis"> Lihat Detail </span>
                                       <span class="text-dark"><i class="fas fa-arrow-right"></i></span>
                                    </div>
                                 </a>
                              </div>
                           </div>

                           <div class="col-6">
                              <div class="card-body text-white bg-appregis">
                                 <div class="huge text-right"><?php foreach ($trans as $tra) {
                                                                  echo $tra->transaksinya;
                                                               } ?></div>
                                 <p class="card-title text-right text-appgrey"> Jumlah Transaksi </p>
                              </div>

                              <div class="card-body bg-appgrey rounded-bottom">
                                 <a href="<?= base_url('user/transaksi'); ?>" style="text-decoration: none;">
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
                                    <p class="card-text">Hari ini Tanggal <?php echo date("d-M-Y") ?></p>
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